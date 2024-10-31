@extends('admin.template')
@section('main')
<div class="content-wrapper" ng-controller="driver_management">
  <section class="content-header">
    <h1>  {{ __('messages.admin.manage_vehicle_model.edit_vehicle_model') }}</h1>
    <ol class="breadcrumb">
      <li><a href="{{ url(LOGIN_USER_TYPE.'/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('messages.admin.home') }}</a></li>
      <li><a href="{{ url(LOGIN_USER_TYPE.'/vehicle_model') }}">{{ __('messages.admin.manage_vehicle_model.title') }}</a></li>
      <li class="active">{{ __('messages.admin.edit') }}</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">{{ __('messages.admin.manage_vehicle_model.edit_form_title') }}</h3>
          </div>
          {!! Form::open(['url' => LOGIN_USER_TYPE.'/edit-vehicle_model/'.$result->id, 'class' => 'form-horizontal','files' => true]) !!}
            <div class="box-body">
            <span class="text-danger">(*){{ __('messages.admin.fields_are_mandatory') }}</span>
            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">{{__('messages.admin.manage_vehicle_model.form.vehicle_make')}}<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::select('vehicle_make_id',$make, $result->vehicle_make_id, ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']) !!}
                <span class="text-danger">{{ $errors->first('vehicle_make_id') }}</span>
              </div>
            </div>
            <div class="form-group">
              <label for="input_first_name" class="col-sm-3 control-label">{{__('messages.admin.manage_vehicle_model.form.model')}}<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::text('model_name', $result->model_name, ['class' => 'form-control', 'id' => 'input_make_name', 'placeholder' => 'Vehicle Model Name']) !!}
                <span class="text-danger">{{ $errors->first('model_name') }}</span>
              </div>
            </div>
            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">{{__('messages.admin.manage_vehicle_model.form.status')}}<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), $result->status, ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => __('messages.admin.manage_vehicle_model.form.status')]) !!}
                <span class="text-danger">{{ $errors->first('status') }}</span>
              </div>
            </div>
          </div>
          <div class="box-footer text-center">
            <button type="submit" class="btn btn-info" name="submit" value="submit">{{ __('messages.admin.submit') }}</button>
            <button type="submit" class="btn btn-default" name="cancel" value="cancel">{{ __('messages.admin.cancel') }}</button>
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </section>
</div>
@endsection