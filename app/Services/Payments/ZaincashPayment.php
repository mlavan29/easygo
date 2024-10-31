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

use App\Services\PaymentMethods\ZaincashPayment as ZaincashGateway;
use App\Contracts\PaymentInterface;

class ZaincashPayment  extends ZaincashGateway implements PaymentInterface
{

    public function view($user)
    {

        return array('view' => 'payment.zaincash');
    }

    public function Payment($paymentData, $authCode)
    {
        $responce = $this->makePayment($paymentData, $authCode);
        return $this->returnResponce($responce);
    }

    public function Verify($requestData)
    {
        $responce = $this->paymentVerify($requestData);
        return $this->returnResponce($responce);
    }


    public function returnResponce($responce)
    {
        $responce->status_code =  $responce->status ? "1" : "0";
        return $responce;
    }
}
