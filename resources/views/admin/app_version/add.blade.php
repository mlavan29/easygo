@extends('admin.template')
@section('main')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      {{ __('messages.admin.add') }}  {{ __('messages.admin.manage_mobile_app_version.subtitle') }}
    </h1>
    <ol class="breadcrumb">
      <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('messages.admin.home') }}</a></li>
      <li><a href="{{ url('admin/mobile_app_version') }}"> {{ __('messages.admin.manage_mobile_app_version.subtitle') }}</a></li>
      <li class="active">{{ __('messages.admin.add') }}</li>
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
            <h3 class="box-title">{{ __('messages.admin.manage_mobile_app_version.add_mobile_app_version_form') }}</h3>
          </div>
          <!-- /.box-header -->
          <!-- form start -->
          {!! Form::open(['url' => 'admin/add_app_version', 'class' => 'form-horizontal form']) !!}
          <div class="box-body">
            <span class="text-danger">(*){{ __('messages.admin.fields_are_mandatory') }}</span>
            <div class="form-group">
              <label for="input_name" class="col-sm-3 control-label">{{ __('messages.admin.manage_mobile_app_version.form.version') }}<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::text('version', '', ['class' => 'form-control', 'id' => 'input_name', 'placeholder' => 'Version']) !!}
                <span class="text-danger">{{ $errors->first('version') }}</span>
              </div>
            </div>
            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">{{ __('messages.admin.manage_mobile_app_version.form.device_type') }}<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::select('device_type', array('1' => 'Apple','2' => 'Android'), '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']) !!}
                <span class="text-danger">{{ $errors->first('device_type') }}</span>
              </div>
            </div> 
            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">{{ __('messages.admin.manage_mobile_app_version.form.user_type') }}<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::select('user_type', array('0' => 'Rider', '1' => 'Driver'), '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']) !!}
                <span class="text-danger">{{ $errors->first('user_type') }}</span>
              </div>
            </div>   
            <div class="form-group">
              <label for="input_status" class="col-sm-3 control-label">{{ __('messages.admin.manage_mobile_app_version.form.force_update') }}<em class="text-danger">*</em></label>
              <div class="col-md-7 col-sm-offset-1">
                {!! Form::select('force_update', array('1' => 'Yes','0' => 'No'), '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']) !!}
                <span class="text-danger">{{ $errors->first('force_update') }}</span>
              </div>
            </div>   
          </div>         
          <!-- /.box-body -->
          <div class="box-footer text-center">
            <button type="submit" class="btn btn-info" name="submit" value="submit">
              {{ __('messages.admin.submit') }}
            </button>
            <a href="{{ url('admin/mobile_app_version') }}" class="btn btn-default" name="cancel" value="Cancel">
              {{ __('messages.admin.cancel') }}
            </a>            
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
@stop