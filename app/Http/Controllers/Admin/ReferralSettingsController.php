<?php

/**
 * Referral Settings Controller
 *
 * @package     Cabme
 * @subpackage  Controller
 * @category    Referral Settings
 * @author      SMR IT Solutions Team
 * @version     2.2.1
 * @link        https://smritsolutions.com
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Start\Helpers;
use App\Models\ReferralSetting;
use App\Models\Currency;
use Validator;

class ReferralSettingsController extends Controller
{
    public function __construct()
    {
        $this->base_url = $this->view_data['base_url'] = 'admin/referral_settings';
        $this->view_data['main_title'] = __('messages.admin.manage_referral_settings.referral_settings');
        $this->view_data['update_url'] = url('admin/update_referral_settings');
        $this->helper = new Helpers;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->view_data['driver_result']  = ReferralSetting::driver()->get()->pluck('value','name')->toArray();
        $this->view_data['rider_result']   = ReferralSetting::rider()->get()->pluck('value','name')->toArray();
        $this->view_data['currency']       = Currency::codeSelect();
        return view('admin.referral_settings', $this->view_data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user_type = $request->user_type;

        $number_of_trips    = $user_type.'_trips';
        $number_of_days     = $user_type.'_days';
        $referral_amount    = $user_type.'_amount';
        $currency_code      = $user_type.'_currency';

        $rules = array(
            $number_of_trips    => 'required|numeric|min:1',
            $number_of_days     => 'required|numeric|min:1',
            $referral_amount    => 'required|numeric|min:1',
            $currency_code      => 'required',
        );

        // Fees Validation Custom Names
        $attributes = array(
            $number_of_trips    => __('messages.admin.manage_referral_settings.form.number_of_trips'),
            $number_of_days     => __('messages.admin.manage_referral_settings.form.time_frame'),
            $referral_amount    => __('messages.admin.manage_referral_settings.form.referral_amount'),
            $currency_code      => __('messages.admin.manage_referral_settings.form.currency_code'),
        );

        $validator = Validator::make($request->all(), $rules, $attributes);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $user_type = ucfirst($user_type);

        ReferralSetting::where(['name' => 'number_of_trips', 'user_type' => $user_type])->update(['value' => $request->$number_of_trips]);

        ReferralSetting::where(['name' => 'number_of_days', 'user_type' => $user_type])->update(['value' => $request->$number_of_days]);

        ReferralSetting::where(['name' => 'currency_code', 'user_type' => $user_type])->update(['value' => $request->$currency_code]);

        ReferralSetting::where(['name' => 'referral_amount', 'user_type' => $user_type])->update(['value' => $request->$referral_amount]);

        $this->helper->flash_message('success', 'Updated Successfully');

        return redirect($this->base_url);
    }
}