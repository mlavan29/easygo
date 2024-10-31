<?php

/**
 * Mtn Payout Service
 *
 * @package     Ridein
 * @subpackage  Services\Payouts
 * @category    Mtn
 * @author      Source monster Team
 * @version     2.2.1
 * @link        https://sourcemonster.in
 */

namespace App\Services\Payouts;

use App\Models\Country;
use App\Models\Currency;
use App\Models\Transaction;
use Bmatovu\MtnMomo\Exceptions\CollectionRequestException;
use Illuminate\Support\Facades\Config;
use Tymon\JWTAuth\Facades\JWTAuth;
use Bmatovu\MtnMomo\Products\Disbursement;
use Illuminate\Support\Facades\Validator;

class MtnPayout
{
    public $defaultPhoneNumber = '';

    public function __construct()
    {

        Config::set('mtn-momo.environment', payment_gateway('mode', 'MtnDisbursement'));
        $default_currency = 'EUR';
        if (payment_gateway('mode', 'MtnDisbursement') != 'sandbox') {
            $default_currency = Currency::where('default_currency', '1')->first()->code;
        }

        Config::set('mtn-momo.currency', $default_currency);
        Config::set('mtn-momo.products.disbursement.id', payment_gateway('collection_id', 'MtnDisbursement'));
        Config::set('mtn-momo.products.disbursement.callback_uri', route('mtn_momo.disbursement_callback_url'));
        Config::set('mtn-momo.products.disbursement.secret', payment_gateway('secret', 'MtnDisbursement'));
        Config::set('mtn-momo.products.disbursement.key', payment_gateway('subscription_key', 'MtnDisbursement'));
    }

    /**
     * Get Current Login User based on request segment
     *
     * @return $user instance of User
     */
    protected function getCurrentUser()
    {
        if (isApiRequest()) {
            return JWTAuth::parseToken()->authenticate();
        }
        if (request()->segment(1) == 'company') {
            return auth('company')->user();
        }
        return auth()->user();
    }


    public function makePayout($payout_id, $pay_data)
    {
        try {

            if (payment_gateway('mode', 'MtnDisbursement') === 'sandbox') {
                $this->defaultPhoneNumber = '23733123450';
            } else {
                $this->defaultPhoneNumber  = $payout_id ? $payout_id : $pay_data['mobile_number'];
            }

            $referenceId = $this->generateReferenceId();
            $disbursement = new Disbursement();
            $disbursementResponse = $disbursement->transfer($referenceId, $this->defaultPhoneNumber, $pay_data['amount']);
            $getTransactionStatus = $disbursement->getTransactionStatus($disbursementResponse);

            //save transaction
            $transaction = new Transaction();
            $transaction->payment_method = 'Mtn Mobile Money';
            $transaction->payment_purpose = 'Payout';
            $transaction->user_id = $pay_data['user_id'];
            $transaction->reference =   $referenceId;
            $transaction->momo_transaction_id = $disbursementResponse;

            if ($getTransactionStatus['status'] == 'SUCCESSFUL') {
                $transaction->status = 'completed'; //pending,failed,completed
                $transaction->amount = $getTransactionStatus['amount'];
                $transaction->tel = $getTransactionStatus['payer']['partyId'];
                $transaction->transaction_id =  $getTransactionStatus['financialTransactionId'];
                $transaction->save();

                return array(
                    'status' => true,
                    'status_message' => 'Payout amount has transferred successfully',
                    'transaction_id' =>  $getTransactionStatus['financialTransactionId'],
                    'is_pending' => true
                );
            } else if ($getTransactionStatus['status'] == 'PENDING') {

                $transaction->status = 'pending'; //pending,failed,completed
                $transaction->amount = $getTransactionStatus['amount'];
                $transaction->tel = $getTransactionStatus['payer']['partyId'];
                $transaction->save();
                return array(
                    'status' => true,
                    'status_message' => 'Payout amount has pending',
                    'transaction_id' => '',
                    'is_pending' => false
                );
            } else {

                $transaction->status = 'failed'; //pending,failed,completed
                $transaction->amount = $getTransactionStatus['amount'];
                $transaction->tel = $getTransactionStatus['payer']['partyId'];
                $transaction->save();

                return array(
                    'status' => false,
                    'status_message' => 'Payout amount has transferred failed',
                    'transaction_id' => '',
                    'is_pending' => false
                );
            }
        } catch (CollectionRequestException  $e) {
            return array(
                'status' => false,
                'status_message' => $e->getMessage(),
            );
        }
    }

       /**
     * validate Request
     *
     * @param Request $[request]
     * @return Mixed
     */
    public function validateRequest($request)
    {
        $rules = array(
            'mtn_tel' => 'required|numeric',
        );

        $messages = array(
            'required' => ':attribute '.trans('messages.home.field_is_required'),
        );
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            if(isApiRequest()) {
                return response()->json([
                    'status_code' => '0',
                    'status_message' => $validator->messages()->first(),
                ]);
            }
            return back()->withErrors($validator)->withInput();
        }
        return false;
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
