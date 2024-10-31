@extends('admin.template')
@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ __('messages.admin.locations.add_location') }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> {{ __('messages.admin.home') }}</a>
                </li>
                <li><a href="{{ url('admin/locations') }}"> {{ __('messages.admin.locations.title') }}</a></li>
                <li class="active">{{ __('messages.admin.add') }}</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content" ng-controller='manage_locations'>
            <div class="row">
                <!-- right column -->
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title"> {{ __('messages.admin.locations.add_title') }}</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['url' => 'admin/add_location', 'class' => 'form-horizontal form']) !!}
                        <div class="box-body"
                            ng-init="formatted_coords={{ json_encode(old('formatted_coords', [])) }};coordinates=[]">
                            <span class="text-danger">(*){{ __('messages.admin.fields_are_mandatory') }}</span>
                            <div class="form-group">
                                <label for="input_name" class="col-sm-3 control-label">
                                    {{ __('messages.admin.locations.form.name') }}<em class="text-danger">*</em></label>
                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::text('name', '', ['class' => 'form-control', 'id' => 'input_name', 'placeholder' => 'Name']) !!}
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_status" class="col-sm-3 control-label">       {{ __('messages.admin.locations.form.status') }}<em
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
                            {{ Form::hidden('coordinates', '', ['class' => 'coordinates', 'ng-model' => 'coordinates']) }}
                        </div>
                        <div class="box-body">
                            <span class="text-danger">{{ $errors->first('coordinates') }}</span>
                            <span class="text-danger">{{ old('location_set') }}</span>
                            <input id="pac-input" class="controls hide" type="text" placeholder="Search here"
                                style="padding: 5px;margin: 5px;">
                            <div id="map" style="height: 500px;width: 100%;"></div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-info" name="submit" value="submit">
                              {{ __('messages.admin.submit') }} 
                            </button>
                            <a href="{{ url('admin/locations') }}" class="btn btn-default" name="cancel" value="Cancel">
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
