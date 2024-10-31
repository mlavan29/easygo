@extends('admin.template')
@section('main')
    <style type="text/css">
        .tooltip-custom {
            display: inline-block;
            position: relative;
            vertical-align: middle;
            line-height: 16px;
            margin: -5px 0 -3px;
            padding: 4px 0;
        }

        .tooltip-custom .icon {
            background: url("../images/seller_settings.png") no-repeat;
            background-size: 120px 200px;
        }

        .tooltip-custom .icon {
            display: block;
            width: 14px;
            height: 14px;
            background-position: -95px -150px !important;
            opacity: 0.4;
        }

        .tooltip-custom em {
            font-weight: normal;
            font-size: 12px;
            padding: 2px 10px 10px;
            width: 200px;
            white-space: normal;
            line-height: 16px;
            top: 22px;
            text-align: left;
            margin-left: -100px !important;
            left: 50%;
            background: #2c3239;
            border-radius: 2px;
            color: #fff;
            font-style: normal;
            position: absolute;
            display: none;
            z-index: 1;
        }

        .tooltip-custom em::after {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            border-color: #2c3239 transparent transparent;
            border-image: none;
            border-style: solid;
            border-width: 3px;
            top: -6px;
            content: "";
            left: 50%;
            margin-left: -3px;
            position: absolute;
            transform: rotate(180deg);
        }

        .tooltip-custom:hover em {
            display: block !important;
        }

        .box-body {
            padding: 0;
        }
    </style>
    <div class="content-wrapper">
        <section class="content-header">
            <h1> {{ __('messages.admin.payment_gateway.title') }}</h1>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ url(LOGIN_USER_TYPE . '/dashboard') }}"> <i class="fa fa-dashboard"></i>
                        {{ __('messages.admin.home') }} </a>
                </li>
                <li>
                    <a href="{{ url(LOGIN_USER_TYPE . '/payment_gateway') }}">
                        {{ __('messages.admin.payment_gateway.title') }}</a>
                </li>
                <li class="active"> {{ __('messages.admin.edit') }} </li>
            </ol>
        </section>
        <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title"> {{ __('messages.admin.payment_gateway.form_title') }}</h3>
                        </div>
                        {!! Form::open(['url' => 'admin/payment_gateway', 'class' => '']) !!}
                        <div class="box-body">
                            <span class="text-danger">(*){{ __('messages.admin.fields_are_mandatory') }}</span>

                            <!-- Tab Navigation -->
                            <ul class="nav nav-pills nav-justified" style="margin-top:20px">
                                <li class="active"><a data-toggle="tab"
                                        href="#home">{{ __('messages.admin.payment_gateway.tabs.paypal') }} @if (payment_gateway('is_enabled', 'Paypal') == '1')
                                            <span class="badge">Active</span>
                                        @endif
                                    </a>
                                </li>
                                <li><a data-toggle="tab"
                                        href="#menu1">{{ __('messages.admin.payment_gateway.tabs.stripe') }} @if (payment_gateway('is_enabled', 'Stripe') == '1')
                                            <span class="badge">Active</span>
                                        @endif </a></li>
                                <li><a data-toggle="tab"
                                        href="#menu2">{{ __('messages.admin.payment_gateway.tabs.paytm') }} @if (payment_gateway('is_enabled', 'Paytm') == '1')
                                            <span class="badge">Active</span>
                                        @endif
                                    </a>
                                </li>
                                <li><a data-toggle="tab"
                                        href="#menu3">{{ __('messages.admin.payment_gateway.tabs.razorpay') }}
                                        @if (payment_gateway('is_enabled', 'Razorpay') == '1')
                                            <span class="badge">Active</span>
                                        @endif
                                    </a>
                                </li>
                                <li><a data-toggle="tab"
                                        href="#menu4">{{ __('messages.admin.payment_gateway.tabs.flutterwave') }}
                                        @if (payment_gateway('is_enabled', 'Flutterwave') == '1')
                                            <span class="badge">Active</span>
                                        @endif
                                    </a>
                                </li>
                                <li><a data-toggle="tab"
                                        href="#menu5">{{ __('messages.admin.payment_gateway.tabs.redsys') }} @if (payment_gateway('is_enabled', 'Redsys') == '1')
                                            <span class="badge">Active</span>
                                        @endif
                                    </a>
                                </li>
                                <li><a data-toggle="tab"
                                        href="#menu6">{{ __('messages.admin.payment_gateway.tabs.braintree') }}
                                        @if (payment_gateway('is_enabled', 'Braintree') == '1')
                                            <span class="badge">Active</span>
                                        @endif
                                    </a>
                                </li>
                                <li><a data-toggle="tab"
                                        href="#menu7">{{ __('messages.admin.payment_gateway.tabs.zaincash') }}
                                        @if (payment_gateway('is_enabled', 'Zaincash') == '1')
                                            <span class="badge">Active</span>
                                        @endif
                                    </a></a></li>
                                <li><a data-toggle="tab" href="#menu8">{{ __('messages.admin.payment_gateway.tabs.mtn') }}
                                        @if (payment_gateway('is_enabled', 'Mtn') == '1')
                                            <span class="badge">Active</span>
                                        @endif
                                    </a></a></li>
                                <li><a data-toggle="tab"
                                        href="#menu9">{{ __('messages.admin.payment_gateway.tabs.payout_methods') }}</a>
                                </li>


                            </ul>

                            <!-- Tab Content -->
                            <div class="tab-content">
                                <div id="home" class="tab-pane fade in active">
                                    <!-- Paypal Section Start -->
                                    <div class="row" style="padding:10px">
                                        <div class="col-md-6">
                                            <div class="form-group"
                                                ng-init="paypal_enabled={{ old('paypal_enabled', payment_gateway('is_enabled', 'Paypal')) }}">
                                                <label for="input_paypal_enabled"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.is_paypal_enabled') }}
                                                    <em class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select('paypal_enabled', ['0' => 'No', '1' => 'Yes'], '', [
                                                        'class' => 'form-control',
                                                        'id' => 'input_paypal_enabled',
                                                        'ng-model' => 'paypal_enabled',
                                                    ]) !!}
                                                    <span class="text-danger">{{ $errors->first('paypal_enabled') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_paypal_mode"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.paypal_mode') }}
                                                    <em ng-show="paypal_enabled == '1'" class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select(
                                                        'paypal_mode',
                                                        ['sandbox' => 'Sandbox', 'live' => 'Live'],
                                                        old('paypal_mode', payment_gateway('mode', 'Paypal')),
                                                        ['class' => 'form-control', 'id' => 'input_paypal_mode'],
                                                    ) !!}
                                                    <span class="text-danger">{{ $errors->first('paypal_mode') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_paypal_id"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.paypal_id') }}
                                                    <em ng-show="paypal_enabled == '1'" class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('paypal_id', old('paypal_id', payment_gateway('paypal_id', 'Paypal')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_paypal_id',
                                                        'placeholder' => 'PayPal Id',
                                                    ]) !!}
                                                    <span class="text-danger">{{ $errors->first('paypal_id') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_paypal_client"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.paypal_client_id') }}
                                                    <em ng-show="paypal_enabled == '1'" class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('paypal_client', old('paypal_client', payment_gateway('client', 'Paypal')), [
                                                        'class' => 'form-control',
                                                        'id' => '',
                                                        'placeholder' => 'PayPal Client',
                                                    ]) !!}
                                                    <span class="text-danger">{{ $errors->first('paypal_client') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_paypal_secret" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.paypal_secret') }}
                                                    <em ng-show="paypal_enabled == '1'" class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('paypal_secret', old('paypal_secret', payment_gateway('secret', 'Paypal')), [
                                                        'class' => 'form-control',
                                                        'id' => '',
                                                        'placeholder' => 'PayPal Secret',
                                                    ]) !!}
                                                    <span class="text-danger">{{ $errors->first('paypal_secret') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="accessToken" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.paypal_access_token') }}
                                                    <em ng-show="paypal_enabled == '1'" class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('paypal_access_token', old('paypal_access_token', payment_gateway('access_token', 'Paypal')), [
                                                        'class' => 'form-control',
                                                        'id' => 'accessToken',
                                                        'placeholder' => 'PayPal Access Token',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('paypal_access_token') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <div class="row" style="padding:10px">
                                        <div class="col-md-6">
                                            <div class="form-group"
                                                ng-init="stripe_enabled={{ old('stripe_enabled', payment_gateway('is_enabled', 'Stripe')) }}">
                                                <label for="input_stripe_enabled" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.is_stripe_enabled') }}<em
                                                        class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">

                                                    {!! Form::select(
                                                        'stripe_enabled',
                                                        ['0' => 'No', '1' => 'Yes'],
                                                        old('stripe_enabled', payment_gateway('is_enabled', 'Stripe')),
                                                        ['class' => 'form-control', 'id' => 'input_stripe_enabled', 'ng-model' => 'stripe_enabled'],
                                                    ) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('stripe_enabled') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_stripe_publish_key" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.stripe_key') }} <em
                                                        ng-show="stripe_enabled == '1'" class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('stripe_publish_key', old('stripe_publish_key', payment_gateway('publish', 'Stripe')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_stripe_publish_key',
                                                        'placeholder' => 'Stripe Key',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('stripe_publish_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_stripe_secret_key" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.stripe_secret') }} <em
                                                        ng-show="stripe_enabled == '1'" class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('stripe_secret_key', old('stripe_secret_key', payment_gateway('secret', 'Stripe')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_stripe_secret_key',
                                                        'placeholder' => 'Stripe Secret',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('stripe_secret_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_stripe_api_version" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.stripe_api_version') }}
                                                    <em ng-show="stripe_enabled == '1'" class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('stripe_api_version', old('stripe_api_version', payment_gateway('api_version', 'Stripe')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_stripe_api_version',
                                                        'placeholder' => 'Stripe API Version',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('stripe_api_version') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <div class="row" style="padding:10px">
                                        <div class="col-md-6">
                                            <div class="form-group"
                                                ng-init="paytm_enabled={{ old('paytm_enabled', payment_gateway('is_enabled', 'Paytm')) }}">
                                                <label for="input_paytm_enabled" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.is_paytm_enabled') }}<em
                                                        class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select('paytm_enabled', ['0' => 'No', '1' => 'Yes'], '', [
                                                        'class' => 'form-control',
                                                        'id' => 'input_paytm_enabled',
                                                        'ng-model' => 'paytm_enabled',
                                                    ]) !!}
                                                    <span class="text-danger">{{ $errors->first('paytm_enabled') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_paytm_mode" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.paytm_mode') }}
                                                    <em ng-show="paytm_enabled == '1'" class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select(
                                                        'paytm_mode',
                                                        ['local' => 'Sandbox', 'live' => 'Live'],
                                                        old('paytm_mode', payment_gateway('mode', 'Paytm')),
                                                        ['class' => 'form-control', 'id' => 'input_paytm_mode'],
                                                    ) !!}
                                                    <span class="text-danger">{{ $errors->first('paytm_mode') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_paytm_id" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.paytm_merchant_id') }} <em
                                                        ng-show="paytm_enabled == '1'" class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('paytm_id', old('paytm_id', payment_gateway('merchant_id', 'Paytm')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_paytm_id',
                                                        'placeholder' => 'paytm merchant Id',
                                                    ]) !!}
                                                    <span class="text-danger">{{ $errors->first('paytm_id') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_paytm_key"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.paytm_merchant_key') }}
                                                    Key <em ng-show="paytm_enabled == '1'" class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('paytm_key', old('paytm_key', payment_gateway('key', 'Paytm')), [
                                                        'class' => 'form-control',
                                                        'id' => '',
                                                        'placeholder' => 'paytm key',
                                                    ]) !!}
                                                    <span class="text-danger">{{ $errors->first('paytm_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_paytm_website"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.paytm_merchant_website') }}
                                                    <em ng-show="paytm_enabled == '1'" class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('paytm_website', old('paytm_website', payment_gateway('website', 'Paytm')), [
                                                        'class' => 'form-control',
                                                        'id' => '',
                                                        'placeholder' => 'paytm merchant website',
                                                    ]) !!}
                                                    <span class="text-danger">{{ $errors->first('paytm_website') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_paytm_channel"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.paytm_merchant_channel') }}
                                                    <em ng-show="paytm_enabled == '1'" class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('paytm_channel', old('paytm_channel', payment_gateway('channel', 'Paytm')), [
                                                        'class' => 'form-control',
                                                        'id' => '',
                                                        'placeholder' => 'paytm merchant channel',
                                                    ]) !!}
                                                    <span class="text-danger">{{ $errors->first('paytm_channel') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_paytm_type"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.paytm_industry_type') }}<em
                                                        ng-show="paytm_enabled == '1'" class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('paytm_type', old('paytm_type', payment_gateway('type', 'Paytm')), [
                                                        'class' => 'form-control',
                                                        'id' => '',
                                                        'placeholder' => 'paytm industry type',
                                                    ]) !!}
                                                    <span class="text-danger">{{ $errors->first('paytm_type') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu3" class="tab-pane fade">
                                    <div class="row" style="padding:10px">
                                        <div class="col-md-6">
                                            <div class="form-group"
                                                ng-init="razorpay_enabled={{ old('razorpay_enabled', payment_gateway('is_enabled', 'Razorpay')) }}">
                                                <label for="input_razorpay_enabled"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.is_razorpay_enabled') }}
                                                    <em class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select(
                                                        'razorpay_enabled',
                                                        ['0' => 'No', '1' => 'Yes'],
                                                        old('razorpay_enabled', payment_gateway('is_enabled', 'Razorpay')),
                                                        ['class' => 'form-control', 'id' => 'input_razorpay_enabled', 'ng-model' => 'razorpay_enabled'],
                                                    ) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('razorpay_enabled') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_razorpay_mode"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.razorpay_mode') }}
                                                    <em ng-show="razorpay_enabled == '1'" class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select(
                                                        'razorpay_mode',
                                                        ['sandbox' => 'Sandbox', 'live' => 'Live'],
                                                        old('razorpay_mode', payment_gateway('mode', 'Razorpay')),
                                                        ['class' => 'form-control', 'id' => 'input_razorpay_mode'],
                                                    ) !!}
                                                    <span class="text-danger">{{ $errors->first('razorpay_mode') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_razorpay_publish_key" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.razorpay_key') }}
                                                    <em ng-show="razorpay_enabled == '1'"
                                                        class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('razorpay_publish_key', old('razorpay_publish_key', payment_gateway('key', 'Razorpay')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_razorpay_publish_key',
                                                        'placeholder' => 'Razorpay Key',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('razorpay_publish_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_razorpay_secret_key" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.razorpay_secret') }}
                                                    <em ng-show="razorpay_enabled == '1'"
                                                        class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('razorpay_secret_key', old('razorpay_secret_key', payment_gateway('secret', 'Razorpay')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_razorpay_secret_key',
                                                        'placeholder' => 'Razorpay Secret',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('razorpay_secret_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu4" class="tab-pane fade">
                                    <div class="row" style="padding:10px">
                                        <div class="col-md-6">
                                            <div class="form-group"
                                                ng-init="flutterwave_enabled={{ old('flutterwave_enabled', payment_gateway('is_enabled', 'Flutterwave')) }}">
                                                <label for="input_flutterwave_enabled"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.is_flutterwave_enabled') }}
                                                    <em class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select(
                                                        'flutterwave_enabled',
                                                        ['0' => 'No', '1' => 'Yes'],
                                                        old('flutterwave_enabled', payment_gateway('is_enabled', 'Flutterwave')),
                                                        ['class' => 'form-control', 'id' => 'input_flutterwave_enabled', 'ng-model' => 'flutterwave_enabled'],
                                                    ) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('flutterwave_enabled') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_flutterwave_publish_key" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.flutterwave_key') }} <em
                                                        ng-show="flutterwave_enabled == '1'"
                                                        class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text(
                                                        'flutterwave_publish_key',
                                                        old('flutterwave_publish_key', payment_gateway('key', 'Flutterwave')),
                                                        ['class' => 'form-control', 'id' => 'input_flutterwave_publish_key', 'placeholder' => 'Flutterwave Key'],
                                                    ) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('flutterwave_publish_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_flutterwave_secret_key" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.flutterwave_secret') }} <em
                                                        ng-show="flutterwave_enabled == '1'"
                                                        class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text(
                                                        'flutterwave_secret_key',
                                                        old('flutterwave_secret_key', payment_gateway('secret', 'Flutterwave')),
                                                        ['class' => 'form-control', 'id' => 'input_flutterwave_secret_key', 'placeholder' => 'Flutterwave Secret'],
                                                    ) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('flutterwave_secret_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_flutterwave_hash_key" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.flutterwave_hash') }} <em
                                                        ng-show="flutterwave_enabled == '1'"
                                                        class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('flutterwave_hash_key', old('flutterwave_hash_key', payment_gateway('hash', 'Flutterwave')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_flutterwave_hash_key',
                                                        'placeholder' => 'Flutterwave Hash',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('flutterwave_hash_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu5" class="tab-pane fade">
                                    <div class="row" style="padding:10px">
                                        <div class="col-md-6">
                                            <div class="form-group"
                                                ng-init="redsys_enabled={{ old('redsys_enabled', payment_gateway('is_enabled', 'Redsys')) }}">
                                                <label for="input_redsys_enabled" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.is_redsys_enabled') }} <em
                                                        class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select('redsys_enabled', ['0' => 'No', '1' => 'Yes'], '', [
                                                        'class' => 'form-control',
                                                        'id' => 'input_redsys_enabled',
                                                        'ng-model' => 'redsys_enabled',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('redsys_enabled') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_redsys_enviroment"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.redsys_mode') }}
                                                    <em ng-show="redsys_enabled == '1'" class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select(
                                                        'redsys_enviroment',
                                                        ['test' => 'Test', 'live' => 'Live'],
                                                        old('redsys_enviroment', payment_gateway('mode', 'Paytm')),
                                                        ['class' => 'form-control', 'id' => 'input_redsys_enviroment'],
                                                    ) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('redsys_enviroment') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_redsys_merchant_code"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.redsys_merchant_mode') }}
                                                    <em ng-show="redsys_enabled == '1'" class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('redsys_merchant_code', old('redsys_merchant_code', payment_gateway('merchant_code', 'Redsys')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_redsys_merchant_code',
                                                        'placeholder' => 'redsys merchant code',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('redsys_merchant_code') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_redsys_key"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.redsys_key') }}
                                                    <em ng-show="redsys_enabled == '1'" class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('redsys_key', old('redsys_key', payment_gateway('key', 'Redsys')), [
                                                        'class' => 'form-control',
                                                        'id' => '',
                                                        'placeholder' => 'redsys key',
                                                    ]) !!}
                                                    <span class="text-danger">{{ $errors->first('redsys_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_redsys_terminal"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.redsys_terminal') }}
                                                    <em ng-show="redsys_enabled == '1'" class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('redsys_terminal', old('redsys_terminal', payment_gateway('terminal', 'Redsys')), [
                                                        'class' => 'form-control',
                                                        'id' => '',
                                                        'placeholder' => 'redsys terminal',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('redsys_terminal') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_redsys_url_notification"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.redsys_url_notification') }}<em
                                                        ng-show="redsys_enabled == '1'" class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text(
                                                        'redsys_url_notification',
                                                        old('redsys_url_notification', payment_gateway('url_notification', 'Redsys')),
                                                        [
                                                            'class' => 'form-control',
                                                            'id' => '',
                                                            'placeholder' => __('messages.admin.payment_gateway.form.redsys_url_notification'),
                                                        ],
                                                    ) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('redsys_url_notification') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_redsys_url_ok"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.redsys_url_ok') }}
                                                    <em ng-show="redsys_enabled == '1'" class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('redsys_url_ok', old('redsys_url_notification', payment_gateway('url_ok', 'Redsys')), [
                                                        'class' => 'form-control',
                                                        'id' => '',
                                                        'placeholder' => __('messages.admin.payment_gateway.form.redsys_url_ok'),
                                                    ]) !!}
                                                    <span class="text-danger">{{ $errors->first('redsys_url_ok') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_redsys_url_ko"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.redsys_url_ko') }}
                                                    <em ng-show="redsys_enabled == '1'" class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('redsys_url_ko', old('redsys_url_notification', payment_gateway('url_ko', 'Redsys')), [
                                                        'class' => 'form-control',
                                                        'id' => '',
                                                        'placeholder' => __('messages.admin.payment_gateway.form.redsys_url_ko'),
                                                    ]) !!}
                                                    <span class="text-danger">{{ $errors->first('redsys_url_ko') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_redsys_tradename"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.redsys_tradename') }}
                                                    <em ng-show="redsys_enabled == '1'" class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('redsys_tradename', old('redsys_tradename', payment_gateway('tradename', 'Redsys')), [
                                                        'class' => 'form-control',
                                                        'id' => '',
                                                        'placeholder' => 'redsys trade name',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('redsys_tradename') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="menu6" class="tab-pane fade">
                                    <div class="row" style="padding:10px">
                                        <div class="col-md-6">
                                            <div class="form-group"
                                                ng-init="bt_enabled={{ old('bt_enabled', payment_gateway('is_enabled', 'Braintree')) }}">
                                                <label for="input_bt_enabled"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.is_braintree_enabled') }}
                                                    <em class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select(
                                                        'bt_enabled',
                                                        ['0' => 'No', '1' => 'Yes'],
                                                        old('bt_enabled', payment_gateway('is_enabled', 'Braintree')),
                                                        ['class' => 'form-control', 'id' => 'input_bt_enabled', 'ng-model' => 'bt_enabled'],
                                                    ) !!}
                                                    <span class="text-danger">{{ $errors->first('bt_enabled') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_mode" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.payment_mode') }} <em
                                                        ng-show="bt_enabled == '1'" class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select(
                                                        'bt_mode',
                                                        ['sandbox' => 'Sandbox', 'production' => 'Production'],
                                                        old('bt_mode', payment_gateway('mode', 'Braintree')),
                                                        ['class' => 'form-control', 'id' => 'input_mode'],
                                                    ) !!}
                                                    <span class="text-danger">{{ $errors->first('mode') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_merchant_id" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.braintree_merchant_id') }}<em
                                                        ng-show="bt_enabled == '1'" class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('bt_merchant_id', old('bt_merchant_id', payment_gateway('merchant_id', 'Braintree')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_merchant_id',
                                                        'placeholder' => 'Merchant ID',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('bt_merchant_id') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_merchant_id" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.Braintree_merchant_account_id') }}
                                                    <span class="tooltip-custom"><i class="icon"></i>
                                                        <em style="margin-left: -108px;">
                                                            Merchant account ID is a unique identifier for a specific
                                                            merchant
                                                            account in your gateway, and is used to specify which merchant
                                                            account
                                                            to use when creating a transaction.
                                                        </em>
                                                    </span>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text(
                                                        'merchant_account_id',
                                                        old('merchant_account_id', payment_gateway('merchant_account_id', 'Braintree')),
                                                        ['class' => 'form-control', 'id' => 'input_merchant_account_id', 'placeholder' => 'Braintree Merchant Account Id'],
                                                    ) !!}
                                                    <small class="description" style="color: #9da1ab;">
                                                        For default account id, leave it as empty.
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_bt_public" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.braintree_public_key') }}
                                                    <em ng-show="bt_enabled == '1'" class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('bt_public_key', old('bt_public_key', payment_gateway('public_key', 'Braintree')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_bt_public',
                                                        'placeholder' => 'Public Key',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('bt_public_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_bt_private_key" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.braintree_private_key') }}
                                                    <em ng-show="bt_enabled == '1'" class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('bt_private_key', old('bt_private_key', payment_gateway('private_key', 'Braintree')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_bt_private_key',
                                                        'placeholder' => 'Private Key',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('bt_private_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="input_tokenization_key" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.braintree_tokenization_key') }}
                                                    <span class="tooltip-custom"><i class="icon"></i>
                                                        <em style="margin-left: -108px;">
                                                            Manage the ways you authorize requests to Braintree for client
                                                            requests
                                                        </em>
                                                    </span>
                                                    <em class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('tokenization_key', old('tokenization_key', payment_gateway('tokenization_key', 'Braintree')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_tokenization_key',
                                                        'placeholder' => 'Braintree Tokenization Key',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('tokenization_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="menu7" class="tab-pane fade">
                                    <div class="row" style="padding:10px">
                                        <div class="col-md-6">
                                            <div class="form-group row"
                                                ng-init="zaincash_enabled={{ old('zaincash_enabled', payment_gateway('is_enabled', 'Zaincash')) }}">
                                                <label for="input_bt_enabled"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.is_zaincash_enabled') }}
                                                    <em class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select(
                                                        'zaincash_enabled',
                                                        ['0' => 'No', '1' => 'Yes'],
                                                        old('zaincash_enabled', payment_gateway('is_enabled', 'Zaincash')),
                                                        ['class' => 'form-control', 'id' => 'input_zc_enabled', 'ng-model' => 'zaincash_enabled'],
                                                    ) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('zaincash_enabled') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="input_mode" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.zaincash_mode') }} <em
                                                        ng-show="zaincash_enabled == '1'" class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select(
                                                        'zaincash_mode',
                                                        ['sandbox' => 'Sandbox', 'production' => 'Production'],
                                                        old('zaincash_mode', payment_gateway('mode', 'Zaincash')),
                                                        ['class' => 'form-control', 'id' => 'input_mode'],
                                                    ) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('zaincash_mode') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="input_zaincash_msisdn" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.zaincash_msisdn') }}
                                                    <em ng-show="zaincash_enabled == '1'"
                                                        class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('zaincash_msisdn', old('zaincash_msisdn', payment_gateway('msisdn', 'Zaincash')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_zaincash_msisdn',
                                                        'placeholder' => 'Zaincash MSISDB',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('zaincash_msisdn') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="input_zaincash_merchant_id" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.zaincash_merchant_id') }}
                                                    <em ng-show="zaincash_enabled == '1'"
                                                        class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('zaincash_merchant_id', old('zaincash_merchant_id', payment_gateway('merchant_id', 'Zaincash')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_zaincash_merchant_id',
                                                        'placeholder' => 'Zaincash Merchant Id',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('zaincash_merchant_id') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="input_zaincash_merchant_secret"
                                                    class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.zaincash_merchant_secret') }}
                                                    <em ng-show="zaincash_enabled == '1'"
                                                        class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text(
                                                        'zaincash_merchant_secret',
                                                        old('zaincash_merchant_secret', payment_gateway('merchant_secret', 'Zaincash')),
                                                        [
                                                            'class' => 'form-control',
                                                            'id' => 'input_zaincash_merchant_secret',
                                                            'placeholder' => 'Zaincash Merchant Secret',
                                                        ],
                                                    ) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('zaincash_merchant_secret') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                
                                        <div class="col-md-12">
                                            <br/><br/>
                                            <div>{{ __('messages.admin.payment_gateway.note') }}:
                                                <small><b>{{ __('messages.admin.payment_gateway.zaincash_note') }}
                                                    </b></small>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="menu8" class="tab-pane fade">
                                    <div class="row" style="padding:10px">
                                        <div class="col-md-6">
                                            <div class="form-group row"
                                                ng-init="mtn_enabled={{ old('mtn_enabled', payment_gateway('is_enabled', 'Mtn')) }}">
                                                <label for="input_mtn_enabled"
                                                    class="col-sm-3 control-label">{{ __('messages.admin.payment_gateway.form.is_mtn_enabled') }}
                                                    <em class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select(
                                                        'mtn_enabled',
                                                        ['0' => 'No', '1' => 'Yes'],
                                                        old('mtn_enabled', payment_gateway('is_enabled', 'Mtn')),
                                                        ['class' => 'form-control', 'id' => 'input_mtn_enabled', 'ng-model' => 'mtn_enabled'],
                                                    ) !!}
                                                    <span class="text-danger">{{ $errors->first('mtn_enabled') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="input_mode" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.mtn_mode') }} <em
                                                        ng-show="mtn_enabled == '1'" class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select(
                                                        'mtn_mode',
                                                        ['sandbox' => 'Sandbox', 'production' => 'Production'],
                                                        old('mtn_mode', payment_gateway('mode', 'Mtn')),
                                                        ['class' => 'form-control', 'id' => 'input_mode'],
                                                    ) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('mtn_mode') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="input_mtn_subscription_key" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.mtn_subscription_key') }}
                                                    <em ng-show="mtn_enabled == '1'"
                                                        class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('mtn_subscription_key', old('mtn_subscription_key', payment_gateway('subscription_key', 'Mtn')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_mtn_subscription_key',
                                                        'placeholder' => 'MTN subscription key',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('mtn_subscription_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="input_mtn_collection_id" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.mtn_collection_id') }}
                                                    <em ng-show="mtn_enabled == '1'"
                                                        class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('mtn_collection_id', old('mtn_subscription_key', payment_gateway('collection_id', 'Mtn')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_mtn_collection_id',
                                                        'placeholder' => 'MTN collection Id',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('mtn_collection_id') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="input_mtn_secret" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.mtn_secret') }}
                                                    <em ng-show="mtn_enabled == '1'"
                                                        class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('mtn_secret', old('mtn_secret', payment_gateway('secret', 'Mtn')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_mtn_secret',
                                                        'placeholder' => 'MTN Secret',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('mtn_secret') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="input_mtn_disbursement_mode" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.mtn_disbursement_mode') }} <em
                                                        class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::select(
                                                        'mtn_disbursement_mode',
                                                        ['sandbox' => 'Sandbox', 'production' => 'Production'],
                                                        old('mtn_disbursement_mode', payment_gateway('mode', 'MtnDisbursement')),
                                                        ['class' => 'form-control', 'id' => 'input_mtn_disbursement_mode'],
                                                    ) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('mtn_disbursement_mode') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="input_mtn_disbursement_subscription_key" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.mtn_disbursement_subscription_key') }} <em
                                                        class="text-danger">*</em>
                                                </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('mtn_disbursement_subscription_key', old('mtn_disbursement_subscription_key', payment_gateway('subscription_key', 'MtnDisbursement')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_mtn_disbursement_subscription_key',
                                                        'placeholder' => 'MTN disbursement subscription key',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('mtn_disbursement_subscription_key') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="input_mtn_disbursement_collection_id" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.mtn_disbursement_collection_id') }}
                                                    <em 
                                                        class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('mtn_disbursement_collection_id', old('mtn_disbursement_subscription_key', payment_gateway('collection_id', 'MtnDisbursement')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_mtn_disbursement_collection_id',
                                                        'placeholder' => 'MTN disbursement collection Id',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('mtn_disbursement_collection_id') }}</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label for="input_mtn_disbursement_secret" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.mtn_disbursement_secret') }}
                                                    <em 
                                                        class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    {!! Form::text('mtn_disbursement_secret', old('mtn_disbursement_secret', payment_gateway('secret', 'MtnDisbursement')), [
                                                        'class' => 'form-control',
                                                        'id' => 'input_mtn_disbursement_secret',
                                                        'placeholder' => 'MTN disburement Secret',
                                                    ]) !!}
                                                    <span
                                                        class="text-danger">{{ $errors->first('mtn_disbursement_secret') }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        
                                    </div>
                                </div>
                                <div id="menu9" class="tab-pane fade">
                                    <div class="row" style="padding:10px">
                                        <div class="col-md-6 hidden">
                                            <div class="form-group ">
                                                <label for="is_web_payment" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.web_payment') }}
                                                    <em ng-show="bt_enabled == '1'" class="text-danger">*</em></label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    <input type="checkbox" name="is_web_payment" id="is_web_payment"
                                                        value="1"
                                                        {{ old('is_web_payment', payment_gateway('is_web_payment', 'Common')) == 1 ? 'checked' : '' }}>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="input_payout_methods" class="col-sm-3 control-label">
                                                    {{ __('messages.admin.payment_gateway.form.payout_methods') }}
                                                    <em class="text-danger">*</em> </label>
                                                <div class="col-md-7 col-sm-offset-1">
                                                    @foreach (PAYOUT_METHODS as $payout_method)
                                                        <div
                                                            ng-init="payout_method_{{ $payout_method['key'] }}={{ isPayoutEnabled($payout_method['key']) }}">
                                                            <input type="checkbox" name="payout_methods[]"
                                                                id="payout_method-{{ $payout_method['key'] }}"
                                                                value="{{ $payout_method['key'] }}"
                                                                ng-checked="{{ isPayoutEnabled($payout_method['key']) }}">
                                                            <label for="payout_method-{{ $payout_method['key'] }}"
                                                                ng-model="payout_method_{{ $payout_method['key'] }}">
                                                                {{ $payout_method['value'] }} </label>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="box-footer text-center">
                                <button type="submit" class="btn btn-info" name="submit"
                                    value="submit">{{ __('messages.admin.submit') }}</button>
                                <button type="reset" class="btn btn-default"> {{ __('messages.admin.cancel') }}
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
        </section>
    </div>
@endsection
