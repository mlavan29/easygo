@extends('admin.template')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ __('messages.admin.manage_currency.edit_currency') }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url(LOGIN_USER_TYPE . '/dashboard') }}"><i class="fa fa-dashboard"></i>
                        {{ __('messages.admin.home') }}</a></li>
                <li><a href="{{ url(LOGIN_USER_TYPE . '/currency') }}">
                        {{ __('messages.admin.manage_currency.currency') }}</a>
                </li>
                <li class="active"> {{ __('messages.admin.edit') }}</li>
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
                            <h3 class="box-title"> {{ __('messages.admin.manage_currency.edit_currency_form') }}</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['url' => 'admin/edit_currency/' . $result->id, 'class' => 'form-horizontal']) !!}
                        <div class="box-body">
                            <span class="text-danger">(*){{ __('messages.admin.fields_are_mandatory') }}</span>
                            <div class="form-group">
                                <label for="input_name" class="col-sm-3 control-label">
                                    {{ __('messages.admin.manage_currency.form.name') }}<em
                                        class="text-danger">*</em></label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::text('name', $result->name, [
                                        'class' => 'form-control',
                                        'id' => 'input_name',
                                        'placeholder' => 'Name',
                                    ]) !!}
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_code" class="col-sm-3 control-label">
                                    {{ __('messages.admin.manage_currency.form.code') }}<em
                                        class="text-danger">*</em></label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::text('code', $result->code, [
                                        'class' => 'form-control',
                                        'id' => 'input_code',
                                        'placeholder' => __('messages.admin.manage_currency.form.code'),
                                    ]) !!}
                                    <span class="text-danger">{{ $errors->first('code') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_symbol" class="col-sm-3 control-label">
                                    {{ __('messages.admin.manage_currency.form.symbol') }}<em
                                        class="text-danger">*</em></label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::text('symbol', $result->symbol, [
                                        'class' => 'form-control',
                                        'id' => 'input_symbol',
                                        'placeholder' => __('messages.admin.manage_currency.form.symbol'),
                                    ]) !!}
                                    <span class="text-danger">{{ $errors->first('symbol') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_rate"
                                    class="col-sm-3 control-label">{{ __('messages.admin.manage_currency.form.rate') }}<em
                                        class="text-danger">*</em></label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::text('rate', $result->rate, [
                                        'class' => 'form-control',
                                        'id' => 'input_rate',
                                        'placeholder' => __('messages.admin.manage_currency.form.rate'),
                                    ]) !!}
                                    <span class="text-danger">{{ $errors->first('rate') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_status"
                                    class="col-sm-3 control-label">{{ __('messages.admin.manage_currency.form.status') }}<em
                                        class="text-danger">*</em></label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::select('status', ['Active' => 'Active', 'Inactive' => 'Inactive'], $result->status, [
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
