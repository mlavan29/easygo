<?php

/**
 * Paypal Payment Service
 *
 * @package     Cabme
 * @subpackage  Services\Payments
 * @category    Paypal
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
 */

namespace App\Services\PaymentMethods;

use App\Contracts\PaymentInterface;
use Illuminate\Support\Facades\Config;
use KingFlamez\Rave\Facades\Rave as Flutterwave;
use Razorpay\Api\Api;
use Razorpay\Api\Errors\SignatureVerificationError;
use Illuminate\Support\Str;

class RazorpayPayment implements PaymentInterface
{

    public $api;
    /**
     * Intialize Stripe with Secret key
     *
     */
    public function __construct()
    {
        $api_key =  payment_gateway('key', 'Razorpay');
        $api_secret = payment_gateway('secret', 'Razorpay');

        $this->api = new Api($api_key, $api_secret);
    }

    public function makePayment($payment_details, $indent_id = '')
    {
        try {

            $data = [
                'amount' => ((int) $payment_details['amount'] * 100), 'currency' => $payment_details['currency_code'],
                'accept_partial' => false,
                'reference_id' => Str::random(20),
                'customer' => [
                    'email' => $payment_details['user_email'],
                    "name" => $payment_details['user_name'],
                ],
                'notify' => ['email' => true],
                'reminder_enable' => false, 'notes' => [], 'callback_url' => route('payment.verify', ['payment_type' => 'Razorpay']),
                'callback_method' => 'get'
            ];

            $payment = $this->api->paymentLink->create($data);

            if ($payment->status !== 'created') {
                // notify something went wrong
                return arrayToObject(array(
                    'status'         => false,
                    'status_message' => 'payment failed.',
                ));
            }

            $return_data['status'] = true;
            $return_data['status_message'] = 'payment successful';
            $return_data['payment_link'] = $payment->short_url;

            return arrayToObject($return_data);
        } catch (\Exception $e) {
            \Log::error(json_encode($e));
            return arrayToObject(array(
                'status'         => false,
                'status_message' => $e->getMessage(),
            ));
        }
    }

    public function payment_verify($requestData)
    {
        $return_data['status']  = false;
        $return_data['status_message']  = "Payment Failed!";
        try {
            $data = ['razorpay_payment_link_id' => $requestData->razorpay_payment_link_id, 'razorpay_payment_id' => $requestData->razorpay_payment_id, 'razorpay_payment_link_reference_id' => $requestData->razorpay_payment_link_reference_id, 'razorpay_payment_link_status' => $requestData->razorpay_payment_link_status, 'razorpay_signature' => $requestData->razorpay_signature];
            $this->api->utility->verifyPaymentSignature($data);
            $return_data['status'] = true;
            $return_data['transaction_id'] = $requestData->razorpay_payment_id;
            $return_data['status_message']  = "Payment Successfully!";
            return arrayToObject($return_data);
        } catch (SignatureVerificationError $e) {
            return arrayToObject(array(
                'status'         => false,
                'status_message' => $e->getMessage(),
            ));
        }
    }
}
