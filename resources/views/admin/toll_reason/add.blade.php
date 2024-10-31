@extends('admin.template')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ __('messages.admin.manage_additional_reasons.add_additional_reason') }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url(LOGIN_USER_TYPE . '/dashboard') }}"><i class="fa fa-dashboard"></i>
                        {{ __('messages.admin.home') }}</a></li>
                <li><a href="{{ url(LOGIN_USER_TYPE . '/additional-reasons') }}">
                        {{ __('messages.admin.manage_additional_reasons.title') }}</a></li>
                <li class="active"> {{ __('messages.admin.add') }}</li>
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
                            <h3 class="box-title">{{ __('messages.admin.manage_additional_reasons.add_title') }}</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['url' => 'admin/add-additional-reason', 'class' => 'form-horizontal']) !!}
                        <div class="box-body">
                            <span class="text-danger">(*){{ __('messages.admin.fields_are_mandatory') }}</span>
                            <div class="form-group">
                                <label for="input_reason" class="col-sm-3 control-label">    {{ __('messages.admin.manage_additional_reasons.form.reason') }}<em
                                        class="text-danger">*</em></label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::text('reason', '', ['class' => 'form-control', 'id' => 'input_reason', 'placeholder' => __('messages.admin.manage_additional_reasons.form.reason')]) !!}
                                    <span class="text-danger">{{ $errors->first('reason') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_status" class="col-sm-3 control-label">{{ __('messages.admin.manage_additional_reasons.form.status') }}<em
                                        class="text-danger">*</em></label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::select('status', ['Active' => 'Active', 'Inactive' => 'Inactive'], '', [
                                        'class' => 'form-control',
                                        'id' => 'input_status',
                                        'placeholder' => 'Select',
                                    ]) !!}
                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-info" name="submit" value="submit">{{ __('messages.admin.submit') }}</button>
                            <a href="{{ url(LOGIN_USER_TYPE . '/additional-reasons') }}" class="btn btn-default">{{ __('messages.admin.cancel') }}</a>
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
