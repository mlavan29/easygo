<?php

/**
 * Paypal Payment Service
 *
 * @package     Ridein
 * @subpackage  Services\Payments
 * @category    Radsys
 * @author      source monster Team
 * @version     3.0.1
 * @link        https://sourcemonster.in
 */

namespace App\Services\PaymentMethods;

use App\Contracts\PaymentInterface;
use Illuminate\Support\Facades\Config;
use Ssheduardo\Redsys\Facades\Redsys;


class RedsysPayment implements PaymentInterface
{

    protected  $key = '';
    /**
     * Intialize Stripe with Secret key
     *
     */
    public function __construct()
    {
        Config::set('redsys.key', payment_gateway('key', 'Redsys'));
        Config::set('redsys.merchantcode', payment_gateway('merchant_code', 'Redsys'));
        Config::set('redsys.terminal', payment_gateway('terminal', 'Redsys'));
        Config::set('redsys.url_notification', payment_gateway('terminal', 'Redsys'));
        Config::set('redsys.url_ok', payment_gateway('url_ok', 'Redsys'));
        Config::set('redsys.url_ko', payment_gateway('url_ko', 'Redsys'));
        Config::set('redsys.enviroment', payment_gateway('enviroment', 'Redsys'));
        Config::set('redsys.tradename', payment_gateway('tradename', 'Redsys'));
    }


    public function makePayment($payment_details, $indent_id = '')
    {
        try {

            $txn_id = time();
            Redsys::setAmount($payment_details['amount']);
            Redsys::setOrder(time());
            Redsys::setMerchantcode(config('redsys.merchantcode')); //Reemplazar por el código que proporciona el banco
            Redsys::setCurrency('978');
            Redsys::setTransactiontype('0');
            Redsys::setTerminal(config('redsys.terminal'));
            Redsys::setMethod('T'); //Solo pago con tarjeta, no mostramos iupay
            Redsys::setNotification(config('redsys.url_notificacion') . '?payment_type=Redsys&txn_id=' . $txn_id . '&status=notify'); //Url de notificacion
            Redsys::setUrlOk(config('redsys.url_ok') . '?payment_type=Redsys&txn_id=' . $txn_id . '&status=success'); //Url OK
            Redsys::setUrlKo(config('redsys.url_ko') . '?payment_type=Redsys&txn_id=' . $txn_id . '&status=failed'); //Url KO
            Redsys::setVersion('HMAC_SHA256_V1');
            Redsys::setTradeName(config('redsys.tradename'));
            Redsys::setTitular("pay " . $payment_details['pay_for'] . " " . $payment_details['user_id']);
            Redsys::setEnviroment(config('redsys.enviroment')); //Entorno test

            $signature = Redsys::generateMerchantSignature(config('redsys.key'));
            Redsys::setMerchantSignature($signature);

            $form = Redsys::createForm();

            return   $form;
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
        $status = $requestData->status;

        if ($status === 'success') {
            $return_data['status'] = true;
            $return_data['transaction_id'] = $requestData->txn_id;
            $return_data['status_message']  = 'Payment successfully paid.';
        } else if ($status === 'notify') {
            $return_data['status'] = true;
            $return_data['transaction_id'] = $requestData->txn_id;
            $return_data['status_message']  = 'Payment successfully paid.';
        }
        return arrayToObject($return_data);
    }
}
