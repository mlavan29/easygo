<?php

/**
 * Paypal Payment Service
 *
 * @package     Ridein
 * @subpackage  Services\Payments
 * @category    Paypal
 * @author      Sourcemonster Team
 * @version     2.2.1
 * @link        https://sourcemonster.in
 */

namespace App\Services\PaymentMethods;

use App\Contracts\PaymentInterface;
use Exception;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Str;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;

class ZaincashPayment implements PaymentInterface
{

    private $msisdn;
    private $merchant_secret;
    private $merchant_id;
    private $mode;
    private $url;

    /**
     * Intialize Stripe with Secret key
     *
     */
    public function __construct()
    {
        $this->msisdn =  payment_gateway('msisdn', 'Zaincash');
        $this->merchant_secret = payment_gateway('merchant_secret', 'Zaincash');
        $this->merchant_id = payment_gateway('merchant_id', 'Zaincash');
        $this->mode = payment_gateway('mode', 'Zaincash');

        $this->url = $this->mode == 'sandbox' ? 'https://test.zaincash.iq' : 'https://api.zaincash.iq';
    }

    public function makePayment($payment_details, $indent_id = '')
    {
        try {

            $service_type = "pay " . $payment_details['pay_for'] . " " . $payment_details['user_id'];
            $data = [
                'amount' => $payment_details['amount'],
                'currency' => $payment_details['currency_code'],
                'serviceType'  => $service_type,
                'msisdn'  => $this->msisdn,
                'orderId'  =>  'order_' . Str::random(15),
                'redirectUrl'  =>  route('payment.verify', ['payment_type' => 'Zaincash']),
                'iat'  => time(),
                'exp'  => time() + 60 * 60 * 4

            ];
            //Encoding Token
            $newtoken = JWT::encode($data, $this->merchant_secret, 'HS256');

            //POSTing data to ZainCash API
            $data_to_post = array();
            $data_to_post['token'] = urlencode($newtoken);
            $data_to_post['merchantId'] =    $this->merchant_id;
            $data_to_post['lang'] = 'en';
            $options = array(
                'http' => array(
                    'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                    'method'  => 'POST',
                    'content' => http_build_query($data_to_post),
                ),
            );
            $context  = stream_context_create($options);
            $response = file_get_contents($this->url . '/transaction/init', false, $context);
            //Parsing response
            $array = json_decode($response, true);
            $transaction_id = $array['id'];
            $return_data['status'] = true;
            $return_data['status_message'] = 'payment successful';
            $return_data['payment_link'] = $this->url . '/transaction/pay?id=' . $transaction_id;
            return arrayToObject($return_data);
        } catch (Exception $e) {
            \Log::error(json_encode($e));
            return arrayToObject(array(
                'status'         => false,
                'status_message' => $e->getMessage(),
            ));
        }
    }


    public function paymentVerify($requestData)
    {
     
        $return_data['status']  = false;
        $return_data['status_message']  = "Payment Failed!";
        try {
            //you can decode the token by this PHP code:
         //   $result = JWT::decode($this->merchant_secret, new Key($requestData->query('token'), 'HS256'));
            $result= JWT::decode($requestData->query('token'), new Key($this->merchant_secret,'HS256'));
            if ($result) {
                if ($result->status == 'success') {
                    $return_data['status'] = true;
                    $return_data['transaction_id'] = $result->orderid;
                    $return_data['status_message']  = "Payment Successfully!";
                } else if ($result->status == 'failed') {
                    $return_data['status_message']  = $result->msg;
                    return arrayToObject($return_data);
                }
            }
            return arrayToObject($return_data);
        } catch (Exception $e) {
            return arrayToObject(array(
                'status'         => false,
                'status_message' => $e->getMessage(),
            ));
        }
    }
}
