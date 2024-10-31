@extends('admin.template')
@section('main')
<div class="content-wrapper" ng-controller="driver_management">
  <section class="content-header">
    <h1>    {{__('messages.admin.manage_support.edit_support')}} </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url(LOGIN_USER_TYPE.'/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('messages.admin.home') }}</a></li>
      <li><a href="{{ url(LOGIN_USER_TYPE.'/support') }}">   {{__('messages.admin.manage_support.support')}}</a></li>
      <li class="active">{{ __('messages.admin.edit') }}</li>
    </ol>
  </section>
  <section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="box box-info">
          <div class="box-header with-border">
            <h3 class="box-title">   {{__('messages.admin.manage_support.edit_support_form')}}</h3>
          </div>
          {!! Form::open(['url' => LOGIN_USER_TYPE.'/edit_support/'.$result->id, 'class' => 'form-horizontal','files' => true]) !!}
            <div class="box-body">
            <span class="text-danger">(*)     {{__('messages.admin.fields_are_mandatory')}}</span>
            
            <div class="form-group">
              <label for="input_first_name" class="col-sm-3 control-label"> {{__('messages.admin.manage_support.form.name')}}<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::text('name', $result->name, ['class' => 'form-control', 'id' => 'input_name', 'placeholder' => __('messages.admin.manage_support.form.name'),$editable]) !!}
                <span class="text-danger">{{ $errors->first('name') }}</span>
              </div>
            </div>

            <div class="form-group">
              @if($result->id == 1)
                <label for="input_first_name" class="col-sm-3 control-label">{{__('messages.admin.manage_support.form.number')}}<em class="text-danger">*</em></label>
              @else
                <label for="input_first_name" class="col-sm-3 control-label">{{__('messages.admin.manage_support.form.link')}}<em class="text-danger">*</em></label>
              @endif
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::text('link', $result->link, ['class' => 'form-control', 'id' => 'input_link', 'placeholder' => 'link']) !!}
                @if($result->id == 1)
                <small>{{__('messages.admin.manage_support.note')}}</small>
                @endif
                <span class="text-danger">{{ $errors->first('link') }}</span>
              </div>
            </div>

            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">{{__('messages.admin.manage_support.form.status')}}<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), $result->status, ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']) !!}
                <span class="text-danger">{{ $errors->first('status') }}</span>
              </div>
            </div>
         
          <div class="form-group">
              <label for="input_image" class="col-sm-3 control-label">{{__('messages.admin.manage_support.form.image')}} <em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::file('image', ['class' => 'form-control', 'id' => 'input_image', 'accept' => 'image/*']) !!}
                <span class="text-danger">{{ $errors->first('image') }}</span>
                <br>
                <img style="width:100px" src="{{url('images/support/'.$result->image) }}">
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
