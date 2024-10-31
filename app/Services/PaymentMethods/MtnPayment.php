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

namespace App\Services\PaymentMethods;

use App\Contracts\PaymentInterface;
use App\Models\Currency;
use App\Models\Transaction;
use Bmatovu\MtnMomo\Exceptions\CollectionRequestException;
use Bmatovu\MtnMomo\Products\Collection;
use Illuminate\Support\Facades\Config;

class MtnPayment implements PaymentInterface
{
    public $defaultPhoneNumber = '';
    public $callback_url = '';

    public function __construct()
    {

        Config::set('mtn-momo.environment', payment_gateway('mode', 'Mtn'));
        $default_currency = 'EUR';
        if (payment_gateway('mode', 'Mtn') != 'sandbox') {
            $default_currency = Currency::where('default_currency', '1')->first()->code;
        }
        \Log::info('default_currency : '.$default_currency);

        Config::set('mtn-momo.currency', $default_currency);
        Config::set('mtn-momo.products.collection.id', payment_gateway('collection_id', 'Mtn'));
        Config::set('mtn-momo.products.collection.callback_uri', route('mtn_momo.callback_url')); // add callback url
        Config::set('mtn-momo.products.collection.secret', payment_gateway('secret', 'Mtn'));
        Config::set('mtn-momo.products.collection.key', payment_gateway('subscription_key', 'Mtn'));

    }

    public function makePayment($payment_data, $nonce)
    {
        try {
            $collection = new Collection();
            $referenceId = $this->generateReferenceId();

            if (payment_gateway('mode', 'Mtn') === 'sandbox') {
                $this->defaultPhoneNumber = '23733123450'; // payment success
            } else {
                $this->defaultPhoneNumber  = $payment_data['user_country_code'] + $payment_data['user_phone'];
            }
            #/237/
            $momoTransactionId = $collection->requestToPay($referenceId, $this->defaultPhoneNumber, $payment_data['amount']);

            $getTransactionStatus = $collection->getTransactionStatus($momoTransactionId);
            //save transaction
            $transaction = new Transaction();
            $transaction->payment_method = 'Mtn Mobile Money';
            $transaction->payment_purpose = ucfirst($payment_data['pay_for']);
            $transaction->user_id = $payment_data['user_id'];
            $transaction->trip_id = $payment_data['trip_id'];
            $transaction->applied_referral_amount = $payment_data['applied_referral_amount']; 
            $transaction->reference =   $referenceId;
            $transaction->momo_transaction_id = $momoTransactionId;

            if ($getTransactionStatus['status'] == 'SUCCESSFUL') {


                $transaction->status = 'completed'; //pending,failed,completed
                $transaction->amount = $getTransactionStatus['amount'];
                $transaction->tel = $getTransactionStatus['payer']['partyId'];
                $transaction->transaction_id =  $getTransactionStatus['financialTransactionId'];
                $transaction->save();

                $return_data['status'] = true;
                $return_data['pending_status'] = false;
                $return_data['status_message'] = 'payment successful';
                $return_data['transaction_id'] =  $transaction->transaction_id;

                return arrayToObject($return_data);
            } else if ($getTransactionStatus['status'] == 'PENDING') {
                $transaction->status = 'pending'; //pending,failed,completed
                $transaction->amount = $getTransactionStatus['amount'];
                $transaction->tel = $getTransactionStatus['payer']['partyId'];
                $transaction->save();

                return arrayToObject(array(
                    'status'         => false,
                    'status_message' => 'payment in pending.',
                    'pending_status' => true,
                ));
            } else {
                $transaction->status = 'failed'; //pending,failed,completed
                $transaction->amount = $getTransactionStatus['amount'];
                $transaction->tel = $getTransactionStatus['payer']['partyId'];
                $transaction->save();
                return arrayToObject(array(
                    'status'         => false,
                    'status_message' => 'payment failed.',

                ));
            }
        } catch (CollectionRequestException $e) {
            return arrayToObject(array(
                'status'         => false,
                'status_message' => $e->getMessage(),
            ));
        }
    }

    /**
     * Génère un UUID (Universally Unique Identifier) de version 4.
     *
     * @return string UUID généré
     */
    private function generateReferenceId()
    {
        return \Ramsey\Uuid\Uuid::uuid4()->toString();
    }
}
