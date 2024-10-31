<?php

/**
 * Payment Gateway Controller
 *
 * @package     Ridein
 * @subpackage  Controller
 * @category    Payment Gateway
 * @author      Source monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PaymentGateway;

class PaymentGatewayController extends Controller
{
    /**
     * Load View and Update Payment Gateway Data
     *
     * @return redirect to payment_gateway
     */
    public function index(Request $request)
    {
        if ($request->isMethod('GET')) {
            return view('admin.payment_gateway');
        }


        $paypal_rules = array();
        $pt_rules = array();
        $stripe_rules = array();
        $bt_rules = array();
        $fw_rules = array();
        $rp_rules = array();
        $redsys_rules = array();
        $zc_rules = array();
        $mtn_rules = array();

        if ($request->paypal_enabled) {
            $paypal_rules = array(
                'paypal_id'         => 'required',
                'paypal_mode'       => 'required',
                'paypal_client'     => 'required',
                'paypal_secret'     => 'required',
                'paypal_access_token' => 'required',
            );
        }
        if ($request->stripe_enabled) {
            $stripe_rules = array(
                'stripe_publish_key' => 'required',
                'stripe_secret_key' => 'required',
                'stripe_api_version' => 'required',
            );
        }
        if ($request->bt_enabled) {
            $bt_rules = array(
                'bt_mode'           => 'required',
                'bt_merchant_id'    => 'required',
                'bt_public_key'     => 'required',
                'bt_private_key'    => 'required',
                'tokenization_key'  => 'required',
            );
        }

        if ($request->paytm_enabled) {
            $pt_rules = array(
                'paytm_id'         => 'required',
                'paytm_mode'       => 'required',
                'paytm_key'     => 'required',
                'paytm_website'     => 'required',
                'paytm_channel' => 'required',
                'paytm_type' => 'required',
            );
        }

        if ($request->razorpay_enabled) {
            $rp_rules = array(
                'razorpay_mode' => 'required',
                'razorpay_publish_key' => 'required',
                'razorpay_secret_key' => 'required',
            );
        }

        if ($request->flutterwave_enabled) {
            $fw_rules = array(
                'flutterwave_publish_key' => 'required',
                'flutterwave_secret_key' => 'required',
                'flutterwave_hash_key' => 'required',
            );
        }

        if ($request->zaincash_enabled) {
            $zc_rules = array(
                'zaincash_mode' => 'required',
                'zaincash_merchant_secret' => 'required',
                'zaincash_merchant_id' => 'required',
                'zaincash_msisdn' => 'required',
            );
        }

        if ($request->mtn_enabled) {
            $mtn_rules = array(
                'mtn_mode' => 'required',
                'mtn_collection_id' => 'required',
                'mtn_subscription_key' => 'required',
                'mtn_secret' => 'required',
                'mtn_disbursement_secret' => 'required',
                'mtn_disbursement_mode' => 'required',
                'mtn_disbursement_collection_id' => 'required',
                'mtn_disbursement_subscription_key' => 'required',
            );
        }


        if ($request->redsys_enabled) {
            $redsys_rules = array(
                'redsys_enviroment' => 'required',
                'redsys_key' => 'required',
                'redsys_merchant_code' => 'required',
                'redsys_terminal' => 'required',
                'redsys_url_notification' => 'required',
                'redsys_url_ok' => 'required',
                'redsys_url_ko' => 'required',
                'redsys_tradename' => 'required',
            );
        }

        $rules = array_merge($paypal_rules, $stripe_rules, $bt_rules, $pt_rules, $fw_rules, $rp_rules, $redsys_rules, $zc_rules, $mtn_rules);

        // Payment Gateway Validation Custom Names
        $attributes = array(
            'paypal_id'         => 'PayPal ID',
            'paypal_mode'       => 'PayPal Mode',
            'paypal_client'     => 'PayPal Client',
            'paypal_secret'     => 'PayPal Secret',
            'paypal_access_token' => 'PayPal Access Token',
            'stripe_publish_key' => 'Stripe Publish Key',
            'stripe_secret_key' => 'Stripe Secret Key',
            'stripe_api_version' => 'Stripe API Version',
            'bt_mode'           => 'Payment Mode',
            'bt_merchant_id'    => 'Merchant ID',
            'bt_public_key'     => 'Public Key',
            'bt_private_key'    => 'Private Key',
            'paytm_id'         => 'Paytm ID',
            'paytm_mode'       => 'Paytm Mode',
            'paytm_key'     => 'Paytm Merchant Key',
            'paytm_website'     => 'Paytm Merchant Website',
            'paytm_channel' => 'Paytm Merchant Channel',
            'paytm_type' => 'Paytm Industry Type',
            'flutterwave_publish_key' => 'Flutterwave Publish key',
            'flutterwave_secret_key' => 'Flutterwave Secret key',
            'flutterwave_hash_key' => 'Flutterwave Hash key',
            'razorpay_mode' => 'Razorpay Mode',
            'razorpay_publish_key' => 'Razorpay Publish key',
            'razorpay_secret_key' => 'Razorpay Secret key',
            'redsys_enviroment' => 'Redsys Enviroment',
            'redsys_key' => 'Redsys Key',
            'redsys_merchant_code' => 'Redsys Merchant Code',
            'redsys_terminal' => 'Redsys Terminal',
            'redsys_url_notification' => 'Redsys URL Notification',
            'redsys_url_ok' => 'Redsys URL Ok',
            'redsys_url_ko' => 'Redsys URL ko',
            'redsys_tradename' => 'Redsys Trade name',
            'zaincash_mode' => 'Zaincash Mode',
            'zaincash_msisdn' => 'Zaincash MSISDN',
            'zaincash_merchant_id' => 'Zaincash Merchant ID',
            'zaincash_merchant_secret' => 'Zaincash Merchant Secret',
            'mtn_mode' => 'Mtn Mode',
            'mtn_collection_id' => 'Mtn Collection Id',
            'mtn_subscription_key' => 'Mtn Subscription Key',
            'mtn_secret' => 'Mtn Secret',
            'mtn_disbursement_secret' => 'Mtn Disbursement Secret',
            'mtn_disbursement_mode' => 'Mtn Disbursement Mode',
            'mtn_disbursement_collection_id' => 'Mtn Disbursement Collection Id',
            'mtn_disbursement_subscription_key' => 'Mtn Disbursement Subscription Key',
        );

        if ($request->paypal_enabled  && $request->stripe_enabled && $request->bt_enabled && $request->flutterwave_enabled && $request->paytm_enabled && $request->razorpay_enabled && $request->redsys_enabled && $request->zaincash_enabled && $request->mtn_enabled) {
            flashMessage('danger', 'Please Choose either Braintree or Stripe or Flutterwave or Paytm or Razorpay or Redsys or Zaincash or Mtn momo for Card Payments');
            return back();
        }

        if ($request->stripe_enabled == '0' && $request->bt_enabled == '0' && $request->paypal_enabled == '0' && $request->flutterwave_enabled == '0' && $request->paytm_enabled == '0' && $request->razorpay_enabled === '0'  && $request->redsys_enabled === '0'  && $request->zaincash_enabled === '0' && $request->mtn_enabled === '0') {
            flashMessage('danger', 'Please enable atleast One Payment Gateway');
            return back();
        }

        if ($request->payout_methods == '') {
            flashMessage('danger', 'Atleast One payout method should be enabled.');
            return back();
        }

        $this->validate($request, $rules, [], $attributes);

        $default_payments = array(
            payment_gateway('trip_default', 'Common'),
        );

        if ($request->paypal_enabled == "0" && in_array('paypal', $default_payments)) {
            flashMessage('danger', 'Unable to Disable Paypal. Because this is default payment method');
            return back();
        }

        if (in_array('stripe', $default_payments)) {
            if ($request->stripe_enabled == "0" && $request->redsys_enabled == "0" && $request->bt_enabled == "0" && $request->flutterwave_enabled == "0" && $request->Paytm_enabled == "0" && $request->razorpay_enabled === '0' && $request->zaincash_enabled === '0' && $request->mtn_enabled == '0') {
                flashMessage('danger', 'Please enable Stripe or Braintree or Flutterwave or Paytm or Razorpay or Redsys or Zaincash or Mtn momo. Because card is default payment method');
                return back();
            }
        }


        if (PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Paypal'])->first()->value == '1' || $request->paypal_enabled == '0') {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Paypal'])->update(['value' => '0']);
        } else {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Paypal'])->update(['value' => $request->paypal_enabled]);
        }

        PaymentGateway::where(['name' => 'paypal_id', 'site' => 'Paypal'])->update(['value' => $request->paypal_id]);
        PaymentGateway::where(['name' => 'mode', 'site' => 'Paypal'])->update(['value' => $request->paypal_mode]);
        PaymentGateway::where(['name' => 'client', 'site' => 'Paypal'])->update(['value' => $request->paypal_client]);
        PaymentGateway::where(['name' => 'secret', 'site' => 'Paypal'])->update(['value' => $request->paypal_secret]);
        PaymentGateway::where(['name' => 'access_token', 'site' => 'Paypal'])->update(['value' => $request->paypal_access_token]);

        if (PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Stripe'])->first()->value == '1' || $request->stripe_enabled == '0') {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Stripe'])->update(['value' => '0']);
        } else {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Stripe'])->update(['value' => $request->stripe_enabled]);
        }

        PaymentGateway::where(['name' => 'publish', 'site' => 'Stripe'])->update(['value' => $request->stripe_publish_key]);
        PaymentGateway::where(['name' => 'secret', 'site' => 'Stripe'])->update(['value' => $request->stripe_secret_key]);
        PaymentGateway::where(['name' => 'api_version', 'site' => 'Stripe'])->update(['value' => $request->stripe_api_version]);

        if (PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Flutterwave'])->first()->value == '1' || $request->flutterwave_enabled == '0') {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Flutterwave'])->update(['value' => '0']);
        } else {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Flutterwave'])->update(['value' => $request->flutterwave_enabled]);
        }
        PaymentGateway::where(['name' => 'key', 'site' => 'Flutterwave'])->update(['value' => $request->flutterwave_publish_key]);
        PaymentGateway::where(['name' => 'secret', 'site' => 'Flutterwave'])->update(['value' => $request->flutterwave_secret_key]);
        PaymentGateway::where(['name' => 'hash', 'site' => 'Flutterwave'])->update(['value' => $request->flutterwave_hash_key]);

        if (PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Paytm'])->first()->value == '1' || $request->paytm_enabled == '0') {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Paytm'])->update(['value' => '0']);
        } else {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Paytm'])->update(['value' => $request->paytm_enabled]);
        }
        PaymentGateway::where(['name' => 'merchant_id', 'site' => 'Paytm'])->update(['value' => $request->paytm_id]);
        PaymentGateway::where(['name' => 'mode', 'site' => 'Paytm'])->update(['value' => $request->paytm_mode]);
        PaymentGateway::where(['name' => 'key', 'site' => 'Paytm'])->update(['value' => $request->paytm_key]);
        PaymentGateway::where(['name' => 'website', 'site' => 'Paytm'])->update(['value' => $request->paytm_website]);
        PaymentGateway::where(['name' => 'channel', 'site' => 'Paytm'])->update(['value' => $request->paytm_channel]);
        PaymentGateway::where(['name' => 'type', 'site' => 'Paytm'])->update(['value' => $request->paytm_type]);

        if (PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Razorpay'])->first()->value == '1' || $request->razorpay_enabled == '0') {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Razorpay'])->update(['value' => '0']);
        } else {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Razorpay'])->update(['value' => $request->razorpay_enabled]);
        }
        PaymentGateway::where(['name' => 'key', 'site' => 'Razorpay'])->update(['value' => $request->razorpay_publish_key]);
        PaymentGateway::where(['name' => 'secret', 'site' => 'Razorpay'])->update(['value' => $request->razorpay_secret_key]);
        PaymentGateway::where(['name' => 'mode', 'site' => 'Razorpay'])->update(['value' => $request->razorpay_mode]);

        if (PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Redsys'])->first()->value == '1' || $request->redsys_enabled == '0') {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Redsys'])->update(['value' => '0']);
        } else {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Redsys'])->update(['value' => $request->redsys_enabled]);
        }
        PaymentGateway::where(['name' => 'merchant_code', 'site' => 'Redsys'])->update(['value' => $request->redsys_merchant_code]);
        PaymentGateway::where(['name' => 'enviroment', 'site' => 'Redsys'])->update(['value' => $request->redsys_enviroment]);
        PaymentGateway::where(['name' => 'key', 'site' => 'Redsys'])->update(['value' => $request->redsys_key]);
        PaymentGateway::where(['name' => 'terminal', 'site' => 'Redsys'])->update(['value' => $request->redsys_terminal]);
        PaymentGateway::where(['name' => 'url_notification', 'site' => 'Redsys'])->update(['value' => $request->redsys_url_notification]);
        PaymentGateway::where(['name' => 'url_ok', 'site' => 'Redsys'])->update(['value' => $request->redsys_url_ok]);
        PaymentGateway::where(['name' => 'url_ko', 'site' => 'Redsys'])->update(['value' => $request->redsys_url_ko]);



        if (PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Zaincash'])->first()->value == '1' || $request->zaincash_enabled == '0') {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Zaincash'])->update(['value' => '0']);
        } else {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Zaincash'])->update(['value' => $request->zaincash_enabled]);
        }
        PaymentGateway::where(['name' => 'msisdn', 'site' => 'Zaincash'])->update(['value' => $request->zaincash_msisdn]);
        PaymentGateway::where(['name' => 'merchant_id', 'site' => 'Zaincash'])->update(['value' => $request->zaincash_merchant_id]);
        PaymentGateway::where(['name' => 'merchant_secret', 'site' => 'Zaincash'])->update(['value' => $request->zaincash_merchant_secret]);
        PaymentGateway::where(['name' => 'mode', 'site' => 'Zaincash'])->update(['value' => $request->zaincash_mode]);


        if (PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Mtn'])->first()->value == '1' || $request->mtn_enabled == '0') {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Mtn'])->update(['value' => '0']);
        } else {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Mtn'])->update(['value' => $request->mtn_enabled]);
        }

        PaymentGateway::where(['name' => 'subscription_key', 'site' => 'Mtn'])->update(['value' => $request->mtn_subscription_key]);
        PaymentGateway::where(['name' => 'secret', 'site' => 'Mtn'])->update(['value' => $request->mtn_secret]);
        PaymentGateway::where(['name' => 'mode', 'site' => 'Mtn'])->update(['value' => $request->mtn__mode]);
        PaymentGateway::where(['name' => 'collection_id', 'site' => 'Mtn'])->update(['value' => $request->mtn_collection_id]);

        PaymentGateway::where(['name' => 'subscription_key', 'site' => 'MtnDisbursement'])->update(['value' => $request->mtn_disbursement_subscription_key]);
        PaymentGateway::where(['name' => 'secret', 'site' => 'MtnDisbursement'])->update(['value' => $request->mtn_disbursement_secret]);
        PaymentGateway::where(['name' => 'mode', 'site' => 'MtnDisbursement'])->update(['value' => $request->mtn_disbursement_mode]);
        PaymentGateway::where(['name' => 'collection_id', 'site' => 'MtnDisbursement'])->update(['value' => $request->mtn_disbursement_collection_id]);




        if (PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Braintree'])->first()->value == '1' || $request->bt_enabled == '0') {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Braintree'])->update(['value' => '0']);
        } else {
            PaymentGateway::where(['name' => 'is_enabled', 'site' => 'Braintree'])->update(['value' => $request->bt_enabled]);
        }



        PaymentGateway::where(['name' => 'mode', 'site' => 'Braintree'])->update(['value' => $request->bt_mode]);
        PaymentGateway::where(['name' => 'merchant_id', 'site' => 'Braintree'])->update(['value' => $request->bt_merchant_id]);
        PaymentGateway::where(['name' => 'public_key', 'site' => 'Braintree'])->update(['value' => $request->bt_public_key]);
        PaymentGateway::where(['name' => 'private_key', 'site' => 'Braintree'])->update(['value' => $request->bt_private_key]);
        PaymentGateway::where(['name' => 'tokenization_key', 'site' => 'Braintree'])->update(['value' => $request->tokenization_key]);
        PaymentGateway::where(['name' => 'merchant_account_id', 'site' => 'Braintree'])->update(['value' => $request->merchant_account_id]);

        $payout_methods = implode(',', $request->payout_methods);

        PaymentGateway::where(['name' => 'payout_methods', 'site' => 'Common'])->update(['value' => $payout_methods]);


        /*if($request->stripe_enabled == "1" && !in_array('stripe',$default_payments)) {
            PaymentGateway::where(['name' => 'trip_default', 'site' => 'Common'])->update(['value' => 'stripe']);
        }

        if($request->bt_enabled == "1" && !in_array('braintree',$default_payments)) {
            PaymentGateway::where(['name' => 'trip_default', 'site' => 'Common'])->update(['value' => 'braintree']);
        }*/

        flashMessage('success', 'Updated Successfully');

        return redirect('admin/payment_gateway');
    }
}
