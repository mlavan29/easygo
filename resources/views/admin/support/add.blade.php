@extends('admin.template')
@section('main')
<div class="content-wrapper" ng-controller="driver_management">
  <section class="content-header">
    <h1>    {{__('messages.admin.manage_support.add_support')}}</h1>
    <ol class="breadcrumb">
      <li><a href="{{ url(LOGIN_USER_TYPE.'/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('messages.admin.home') }}</a></li>
      <li><a href="{{ url(LOGIN_USER_TYPE.'/support') }}">   {{__('messages.admin.manage_support.support')}}</a></li>
      <li class="active">{{ __('messages.admin.add') }}</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">   {{__('messages.admin.manage_support.add_support_form')}}</h3>
          </div>
          {!! Form::open(['url' => LOGIN_USER_TYPE.'/add_support', 'class' => 'form-horizontal','files' => true]) !!}
          <div class="box-body">
            <span class="text-danger">(*)     {{__('messages.admin.fields_are_mandatory')}}</span>
            
            <div class="form-group">
              <label for="input_first_name" class="col-sm-3 control-label">  {{__('messages.admin.manage_support.form.name')}}<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::text('name', '', ['class' => 'form-control', 'id' => 'input_name', 'placeholder' => __('messages.admin.manage_support.form.name')]) !!}
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>
            </div>
            
            <div class="form-group">
              <label for="input_first_name" class="col-sm-3 control-label"> {{__('messages.admin.manage_support.form.link')}}<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::text('link', '', ['class' => 'form-control', 'id' => 'input_link', 'placeholder' => __('messages.admin.manage_support.form.link')]) !!}
                <span class="text-danger">{{ $errors->first('link') }}</span>
              </div>
            </div>

            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">{{ __('messages.admin.manage_support.form.status') }}<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']) !!}
               <!--  <small>Note* : If the link is a contact number,  Please fill it with country code.</small> -->
                <span class="text-danger">{{ $errors->first('status') }}</span>
              </div>
            </div>
            <div class="form-group">
              <label for="input_image" class="col-sm-3 control-label">{{ __('messages.admin.manage_support.form.image') }} <em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::file('image', ['class' => 'form-control', 'id' => 'input_image', 'accept' => 'image/*']) !!}
                <span class="text-danger">{{ $errors->first('image') }}</span>
              </div>
            </div>
          </div>
          <div class="box-footer text-center">
            <button type="submit" class="btn btn-info" name="submit" value="submit">{{__('messages.admin.submit')}}</button>
            <button type="submit" class="btn btn-default" name="cancel" value="cancel">{{__('messages.admin.cancel')}}</button>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
