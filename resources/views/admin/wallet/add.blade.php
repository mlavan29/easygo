@extends('admin.template')

@section('main')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{__('messages.admin.manage_wallet_and_promo.add_wallet_amount')}} - {{ $user_type }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(LOGIN_USER_TYPE.'/dashboard') }}"><i class="fa fa-dashboard"></i>   {{ __('messages.admin.home') }}</a></li>
        <li><a href="{{ url(LOGIN_USER_TYPE.'/wallet/rider') }}">{{__('messages.admin.manage_wallet_and_promo.wallet')}}</a></li>
        <li class="active">  {{ __('messages.admin.add') }}</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- right column -->
        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">    {{__('messages.admin.manage_wallet_and_promo.add_title')}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::open(['url' => route('add_wallet',['user_type' => $user_type]), 'class' => 'form-horizontal']) !!}
              <div class="box-body">
              <span class="text-danger">(*){{ __('messages.admin.fields_are_mandatory') }}</span>
                <div class="form-group">
                  <label for="user_id" class="col-sm-3 control-label">{{ __('messages.admin.manage_wallet_and_promo.form.username') }}<em class="text-danger">*</em></label>
                  <div class="col-md-7 col-sm-offset-1">
                    {!! Form::select('user_id', $users_list, '', ['class' => 'form-control', 'id' => 'user_id', 'placeholder' => 'Select...']) !!}
                    <span class="text-danger">{{ $errors->first('user_id') }}</span>
                  </div>
               </div>
                
                <div class="form-group">
                  <label for="input_amount" class="col-sm-3 control-label">{{ __('messages.admin.manage_wallet_and_promo.form.amount') }}<em class="text-danger">*</em></label>

                  <div class="col-md-7 col-sm-offset-1">
                    {!! Form::text('amount', '', ['class' => 'form-control', 'id' => 'input_amount', 'placeholder' => __('messages.admin.manage_wallet_and_promo.form.amount')]) !!}
                    <span class="text-danger">{{ $errors->first('amount') }}</span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input_currency_code" class="col-sm-3 control-label">{{ __('messages.admin.manage_wallet_and_promo.form.currency_code') }}<em class="text-danger">*</em></label>

                  <div class="col-md-7 col-sm-offset-1">
                    {!! Form::select('currency_code', $currency, '', ['class' => 'form-control', 'id' => 'input_currency_code', 'placeholder' => 'Select']) !!}
                    <span class="text-danger">{{ $errors->first('currency_code') }}</span>
                  </div>
                </div>
              
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
               <button type="submit" class="btn btn-info" name="submit" value="submit">{{ __('messages.admin.submit') }}</button>
                 <button type="submit" class="btn btn-default" name="cancel" value="cancel">{{ __('messages.admin.cancel') }}</button>
              </div>
              <!-- /.box-footer -->
            {!! Form::close() !!}
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
