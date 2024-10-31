<?php

/**
 * Mtn Payment Service
 *
 * @package     Ridein
 * @subpackage  Services\Payments
 * @category    Mtn
 * @author      Sourcemonster Team
 * @version     2.2.1
 * @link        https://sourcemonster.in
*/

namespace App\Services\Payments;

use App\Contracts\PaymentInterface;
use App\Services\PaymentMethods\MtnPayment as MtnGateway;

class MtnPayment extends MtnGateway implements PaymentInterface 
{

    public function view()
    {
        return array('view' => 'payment.mtn');
    }

    public function Payment($paymentData,$authCode)
    {   
        $responce = $this->makePayment($paymentData,$authCode);
        return $this->returnResponce($responce);
    }

    
    public function returnResponce($responce)
    {
      $responce->status_code =  $responce->status ? "1":"0";
      return $responce;
    }
}