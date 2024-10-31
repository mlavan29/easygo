<?php

/**
 *  Redsys Service
 *
 * @package     Ridein
 * @subpackage  Services\Payments
 * @category    Redsys
 * @author      Sourcemonster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */



namespace App\Services\Payments;

use App\Services\PaymentMethods\RedsysPayment as RedsysGateway;
use App\Contracts\PaymentInterface;

class RedsysPayment  extends RedsysGateway implements PaymentInterface
{

    public function view()
    {   
        $payment_data = session()->get('payment_data');
        $form =  $this->makePayment($payment_data,request()->pay_key);
        return array('view' => 'payment.redsys',compact('form'));
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
