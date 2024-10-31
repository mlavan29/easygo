@extends('admin.template')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
              {{ __('messages.admin.manage_country.edit_country') }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url(LOGIN_USER_TYPE . '/dashboard') }}"><i class="fa fa-dashboard"></i>
                        {{ __('messages.admin.home') }}</a></li>
                <li><a href="{{ url(LOGIN_USER_TYPE . '/country') }}">{{ __('messages.admin.manage_country.country') }}</a></li>
                <li class="active">{{ __('messages.admin.edit') }}</li>
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
                            <h3 class="box-title">{{ __('messages.admin.manage_country.edit_country_form') }}</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['url' => 'admin/edit_country/' . $result->id, 'class' => 'form-horizontal']) !!}
                        <div class="box-body">
                            <span class="text-danger">(*){{ __('messages.admin.fields_are_mandatory') }}</span>
                            <div class="form-group">
                                <label for="input_short_name"
                                    class="col-sm-3 control-label">{{ __('messages.admin.manage_country.form.short_name') }}<em
                                        class="text-danger">*</em></label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::text('short_name', $result->short_name, [
                                        'class' => 'form-control',
                                        'id' => 'input_short_name',
                                        'placeholder' => __('messages.admin.manage_country.form.short_name'),
                                        'readonly' => 'true',
                                    ]) !!}
                                    <span class="text-danger">{{ $errors->first('short_name') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_long_name"
                                    class="col-sm-3 control-label">{{ __('messages.admin.manage_country.form.long_name') }}<em
                                        class="text-danger">*</em></label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::text('long_name', $result->long_name, [
                                        'class' => 'form-control',
                                        'id' => 'input_long_name',
                                        'placeholder' => __('messages.admin.manage_country.form.long_name'),
                                    ]) !!}
                                    <span class="text-danger">{{ $errors->first('long_name') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_iso3"
                                    class="col-sm-3 control-label">{{ __('messages.admin.manage_country.form.iso3') }}</label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::text('iso3', $result->iso3, [
                                        'class' => 'form-control',
                                        'id' => 'input_iso3',
                                        'placeholder' => __('messages.admin.manage_country.form.iso3'),
                                    ]) !!}
                                    <span class="text-danger">{{ $errors->first('iso3') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_num_code"
                                    class="col-sm-3 control-label">{{ __('messages.admin.manage_country.form.num_code') }}</label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::text('num_code', $result->num_code, [
                                        'class' => 'form-control',
                                        'id' => 'input_num_code',
                                        'placeholder' => __('messages.admin.manage_country.form.num_code'),
                                    ]) !!}
                                    <span class="text-danger">{{ $errors->first('num_code') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_phone_code"
                                    class="col-sm-3 control-label">{{ __('messages.admin.manage_country.form.phone_code') }}<em
                                        class="text-danger">*</em></label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::text('phone_code', $result->phone_code, [
                                        'class' => 'form-control',
                                        'id' => 'input_phone_code',
                                        'placeholder' => __('messages.admin.manage_country.form.phone_code'),
                                    ]) !!}
                                    <span class="text-danger">{{ $errors->first('phone_code') }}</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-info" name="submit"
                                value="submit">{{ __('messages.admin.submit') }}</button>
                            <button type="submit" class="btn btn-default" name="cancel"
                                value="cancel">{{ __('messages.admin.cancel') }}</button>
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
