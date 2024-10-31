<?php

/**
 * Trip Controller
 *
 * @package     Cabme
 * @subpackage  Controller
 * @category    Trip
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
 */

namespace App\Http\Controllers\Api;

use App;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentMethod;
use Session;
use PaytmWallet;


class PaymentController extends Controller
{
	public function setSessonData($data, $user)
	{
		session()->forget('payment_data');
		$value['amount']                   = $data['amount'];
		$value['user_id']           	 = $user->id;
		$value['user_name']           	 = $user->first_name . ' ' . $user->last_name;
		$value['user_email']           	 = $user->email;
		$value['user_phone']           	 =  $user->mobile_number;
		$value['user_country_code']           	 =  $user->country_code;
		$value['user_language']           	 =  $user->language;
		$value['currency_code']            = $data['currency_code'];
		$value['payment_type']             = request()->payment_type;
		$value['user_token']               = request()->token;
		$value['pay_for']                  = request()->pay_for;
		$value['original_amount']          = request()->amount;
		$value['applied_referral_amount']  = request()->applied_referral_amount;
		$value['trip_id']                  = request()->trip_id;
		session()->put('payment_data', $value);
	}

	public function payment()
	{
		$user = $this->set_user_deatils();
		$this->setUserLocale($user->language);
		$data['currency_code'] = site_settings('payment_currency');
		$data['amount'] = currencyConvert($user->currency_code, $data['currency_code'], request()->amount);
		$this->setSessonData($data, $user);

		$business_logic = resolve('App\Services\BusinessLogic');
		$validate = $business_logic->validate(session()->get('payment_data'), $this->get_user_deatils());
		// only referal in pay to admin 
		if ($validate['status_code'] != '1') {
			if ($validate['status_code'] == '2')
				$return = $business_logic->pay_to_admin(session()->get('payment_data'), $this->get_user_deatils());
			else if ($validate['status_code'] == '3')
				$return = $business_logic->tripPayment(session()->get('payment_data'), $this->get_user_deatils());
			else
				$return = response($validate);
			return $this->returnView($return);
		}

		$data['payment_method'] = $this->activePaymentMethod();
		foreach ($data['payment_method'] as  $key => $method) {
			try {
				$service = 'App\Services\Payments\\' . ucfirst($method) . "Payment";
				$this->paymeny = resolve($service);
				$data['payment_name']  = $method;
			} catch (\Exception $e) {
				$this->payment = resolve('App\Services\Payments\PaypalPayment');
				$data['payment_name']  = $method;
			}
			$data['view'][$method] = $this->paymeny->view($user);
		}
		return view('payment.payment', $data);
	}
	public function activePaymentMethod()
	{
		$payment_gateway = resolve('payment_gateway');
		return $payment_gateway->where('site', '!=', 'Cash')->where('name', 'is_enabled')->where('value', '1')->pluck('site');
	}


	public function get_user_deatils()
	{
		if (session()->has('payment_data.user_token') || request()->token) {
			if (request()->token) {
				return \JWTAuth::parseToken()->authenticate();
			}
			$set_token = \JWTAuth::setToken(session()->get('payment_data.user_token'));
			return  $set_token->toUser();
		} else
			return auth()->guard('web')->user();
	}

	public function set_user_deatils()
	{
		if (request()->token)
			return \JWTAuth::parseToken()->authenticate();
		else
			return auth()->guard('web')->user();
	}

	public function mtnCallbackCollection(Request $request)
	{

		\Log::info('message' . json_encode($request));
	}


	public function mtnCallbackDisbursement(Request $request)
	{

		\Log::info('message Disbursement : ' . json_encode($request));
	}

	public function verify(Request $request)
	{
		if ($request->query('payment_type') == 'Zaincash') {
			$set_token = \JWTAuth::setToken(session()->get('payment_data.user_token'));
			$user =  $set_token->toUser();
		} else {
			$user = $this->get_user_deatils();
		}

		$this->setUserLocale($user->language);
		$payment_type = request()->payment_type ?? (session()->get('payment_data.payment_type'));


		$service = 'App\Services\Payments\\' . ucfirst($payment_type) . 'Payment';
		$this->payment = resolve($service);
		$method = 'get' . $payment_type . 'Data';
		$paymentData = ($this)->$method($this->payment, $user);

		$payment_status = $this->payment->Verify($request);
		$payment_status->payment_type = $payment_type;
		if ($payment_status->status_code == "1") {
			$payment_status = $this->payment_action($payment_status, $paymentData['all_data']);
		}

		return $this->returnView($payment_status);
	}

	public function success()
	{

		$user = $this->get_user_deatils();
		$this->setUserLocale($user->language);
		$payment_type = request()->payment_type ?? (session()->get('payment_data.payment_type'));
		$service = 'App\Services\Payments\\' . ucfirst($payment_type) . 'Payment';
		$this->payment = resolve($service);

		$method = 'get' . request()->payment_type . 'Data';
		$paymentData = ($this)->$method($this->payment, $user);
		if (isset($paymentData['status_code']) && $paymentData['status_code'] == "0")
			return $this->returnView($paymentData);

		if (request()->payment_type === 'Paytm') {
			$payment_status = $this->payment->Payment($paymentData['all_data'], request()->pay_key);

			return $payment_status;
			// if($payment_status->status_code == "1"){
			// 	return  redirect($payment_status->payment_link);
			// }
		} else if (request()->payment_type === 'Mtn') {
			$payment_status = $this->payment->Payment($paymentData['all_data'], request()->pay_key);
			if ($payment_status->status_code == "1") {
				$payment_status->payment_type = $payment_type;
				$payment_status = $this->payment_action($payment_status, $paymentData['all_data']);
			}
			return $this->returnView($payment_status);

		} else  if (request()->payment_type === 'Flutterwave') {
			$payment_status = $this->payment->Payment($paymentData['all_data'], request()->pay_key);

			if ($payment_status->status_code == "1") {
				return  redirect($payment_status->payment_link);
			}
		} else  if (request()->payment_type === 'Razorpay') {
			$payment_status = $this->payment->Payment($paymentData['all_data'], request()->pay_key);

			if ($payment_status->status_code == "1") {
				return  redirect($payment_status->payment_link);
			}
		} else  if (request()->payment_type === 'Zaincash') {
			$payment_status = $this->payment->Payment($paymentData['all_data'], request()->pay_key);

			if ($payment_status->status_code == "1") {
				return  redirect($payment_status->payment_link);
			}
		} else {

			$payment_status = $this->payment->Payment($paymentData['payment_data'], request()->pay_key);
			if ($payment_status->status_code == "1" && !($payment_status->is_two_step ?? false)) {
				$payment_status->payment_type = $payment_type;
				$payment_status = $this->payment_action($payment_status, $paymentData['all_data']);
			} elseif ($payment_status->is_two_step ?? false) {
				return back()->withErrors(['two_step_id' => $payment_status->two_step_id]);
			}
			return $this->returnView($payment_status);
		}
	}

	public function returnView($payment_status)
	{
		return view('web_payment.view', compact('payment_status'));
	}


	public function getSaveCardData($user, $payment_method = '', $customer_id = '')
	{

		$card_details['payment_method'] = request()->paymentMethod_id;
		if ($customer_id != '')
			$card_details['customer'] = $customer_id;

		if ($payment_method) {
			$card_details =  [
				'customer'      => $payment_method->customer_id,
				'payment_method' => $payment_method->payment_method_id,
			];
		}
		$data['payment_data'] = array(
			'confirm'               => true,
			'off_session'           => true,
			'confirmation_method'   => 'manual',
			"amount"        		=> intval(session()->get('payment_data.amount') * 100),
			'currency'      		=> site_settings('payment_currency'),
			'description'   		=> session()->get('payment_data.pay_for') . ' Payment by ' . $user->first_name,
		) + $card_details;
		$data['all_data'] = session()->get('payment_data');
		return $data;
	}


	public function getStripeData($service, $user)
	{
		//for 3d secure cards 
		if (request()->pay_key) {
			$data['payment_data'] = [];
			$data['all_data'] = session()->get('payment_data');
			return $data;
		}
		$card_details   = '';
		$customer_id   = '';
		if (request()->save_card_id || request()->save_card) {
			if (request()->save_card && !request()->save_card_id) {
				$payment_methods    = PaymentMethod::where('user_id', $user->id)->first();
				$customer_id        = $payment_methods ? $payment_methods->customer_id : '';

				if (!$customer_id) {
					$customer = $service->createCustomer($user->email);
					if ($customer->status == 'success')
						$customer_id = $customer->customer_id;
				}
				$card_details = $this->saveNewCard($user, $customer_id, request()->paymentMethod_id, $service);
				if (isset($card_details['status_code']) && $card_details['status_code'] == "0")
					return $card_details;
			} else {
				$card_details = PaymentMethod::where('user_id', $user->id)->where('id', request()->save_card_id)->first();
			}
		} else {
			$customer = $service->createCustomer($user->email);
			if ($customer->status == 'success')
				$customer_id = $customer->customer_id;
			$attachCustomer = $service->attachCustomer($user, $customer_id, request()->paymentMethod_id);
			if (isset($attachCustomer['status_code']) && $attachCustomer['status_code'] == "0")
				return $attachCustomer;
			$card_details = '';
		}
		return  $this->getSaveCardData($user, $card_details, $customer_id);
	}

	public function saveNewCard($user, $customer_id, $paymentMethod_id, $service)
	{
		$payment_details                = new PaymentMethod;
		$payment_details->user_id       = $user->id;
		$payment_details->customer_id   = $customer_id;
		$attach                         = $service->attachCustomer($user, $customer_id, $paymentMethod_id);
		if (isset($attach['status_code']) && $attach['status_code'] == "0")
			return $attach;
		$payment_details->intent_id         = $attach['intent_id'];
		$payment_details->payment_method_id = $attach['payment_method_id'];
		$payment_details->brand             = $attach['brand'];
		$payment_details->last4             = $attach['last4'];
		$payment_details->save();

		//delete other cards
		PaymentMethod::where('user_id', $user->id)->where('id', '!=', $payment_details->id)->delete();
		return $payment_details;
	}


	public function getBraintreeData($service, $user)
	{
		$data['payment_data'] = session()->get('payment_data.amount');
		$data['key'] = request()->pay_key;
		$data['all_data'] = session()->get('payment_data');
		return $data;
	}
	public function getPaypalData($service, $user)
	{
		$data['payment_data'] = session()->get('payment_data.amount');
		$data['key'] = request()->pay_key;
		$data['all_data'] = session()->get('payment_data');
		return $data;
	}

	public function getZaincashData($service, $user)
	{
		$data['payment_data'] = session()->get('payment_data.amount');
		$data['key'] = request()->pay_key;
		$data['all_data'] = session()->get('payment_data');
		return $data;
	}

	public function getMtnData($service, $user)
	{
		$data['payment_data'] = session()->get('payment_data.amount');
		$data['key'] = request()->pay_key;
		$data['all_data'] = session()->get('payment_data');
		return $data;
	}


	public function getPaytmData($service, $user)
	{
		$data['payment_data'] = session()->get('payment_data.amount');
		$data['key'] = request()->pay_key;
		$data['all_data'] = session()->get('payment_data');
		return $data;
	}

	public function getFlutterwaveData($service, $user)
	{
		$data['payment_data'] = session()->get('payment_data.amount');
		$data['key'] = request()->pay_key;
		$data['all_data'] = session()->get('payment_data');
		return $data;
	}

	public function getRazorpayData($service, $user)
	{
		$data['payment_data'] = session()->get('payment_data.amount');
		$data['key'] = request()->pay_key;
		$data['all_data'] = session()->get('payment_data');
		return $data;
	}

	public function cancel()
	{
		$payment_status = array('status_code' => '0', 'message' => 'Payment failed');
		return $this->returnView($payment_status);
	}

	public function payment_action($payment, $paymentData)
	{
		$payment = json_decode(json_encode($payment), true);
		$data = array_merge($payment, $paymentData);

		if ($payment['payment_type'] == 'Zaincash') {
			$set_token = \JWTAuth::setToken(session()->get('payment_data.user_token'));
			$user =  $set_token->toUser();
		} else {
			$user = $this->get_user_deatils();
		}

		$business_logic = resolve('App\Services\BusinessLogic');
		if ($paymentData['pay_for'] == 'wallet')
			return $business_logic->add_wallet($data, $user);
		else if ($paymentData['pay_for'] == 'pay_to_admin')
			return $business_logic->pay_to_admin($data, $user);
		else
			return $business_logic->tripPayment($data, $user);
	}

	public function setUserLocale($locale)
	{
		App::setLocale($locale);
		Session::put('language', $locale);
	}
}
