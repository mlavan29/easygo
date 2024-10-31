<?php

/**
 * Paypal Razorpay Service
 *
 * @package     Ridein
 * @subpackage  Services\Payments
 * @category    Razorpay
 * @author      Sourcemonster Team
 * @version     2.2.1
 * @link        https://sourcemonster.in
 */



namespace App\Services\Payments;

use App\Services\PaymentMethods\RazorpayPayment as RazorpayGateway;
use App\Contracts\PaymentInterface;

class RazorpayPayment  extends RazorpayGateway implements PaymentInterface
{

    public function view($user)
    {

        $payment_data = session()->get('payment_data');
        $data['response'] =  $this->makePayment($payment_data, request()->pay_key);
        return array('view' => 'payment.razorpay', 'data' => $data);
    }


    public function Payment($paymentData, $authCode)
    {
        $responce = $this->makePayment($paymentData, $authCode);
        return $this->returnResponce($responce);
    }

    public function Verify($requestData){
        $responce = $this->payment_verify($requestData);
        return $this->returnResponce($responce);
    }
    

    public function returnResponce($responce)
    {
        $responce->status_code =  $responce->status ? "1" : "0";
        return $responce;
    }
}
