@extends('admin.template')

@section('main')
<style type="text/css">
  .static_remove {
  text-align: right;
}

.static_remove h4 {
  float: left;
  margin: 10px 0;
}

.panel .btn-danger {
    width: 92px;
}
</style>
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        {{ __('messages.admin.cancel_reasons.add_cancel_reason') }}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(LOGIN_USER_TYPE.'/dashboard') }}"><i class="fa fa-dashboard"></i>    {{ __('messages.admin.home') }}</a></li>
        <li><a href="{{ url(LOGIN_USER_TYPE.'/cancel-reason') }}">   {{ __('messages.admin.cancel_reasons.title') }}</a></li>
        <li class="active">   {{ __('messages.admin.add') }}</li>
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
              <h3 class="box-title">   {{ __('messages.admin.cancel_reasons.add_title') }}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            {!! Form::open(['url' => 'admin/add-cancel-reason', 'class' => 'form-horizontal']) !!}
              <div class="box-body">
              <span class="text-danger">(*){{ __('messages.admin.fields_are_mandatory') }}</span>

                <div class="form-group">
                        <label for="input_language" class="col-sm-3 control-label">{{ __('messages.admin.cancel_reasons.form.language') }}<em class="text-danger">*</em></label>
                        <div class="col-md-7 col-sm-offset-1">
                          {!! Form::select('language', $language, 'en', ['class' => 'form-control', 'id' => 'input_language', 'disabled' =>'disabled']) !!}
                        </div>
                </div>

                <div class="form-group">
                  <label for="input_reason" class="col-sm-3 control-label">{{ __('messages.admin.cancel_reasons.form.reason') }}<em class="text-danger">*</em></label>

                  <div class="col-md-7 col-sm-offset-1">
                    {!! Form::text('reason', '', ['class' => 'form-control', 'id' => 'input_reason', 'placeholder' =>  __('messages.admin.cancel_reasons.form.reason')]) !!}
                    <span class="text-danger">{{ $errors->first('reason') }}</span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input_cancelled_by" class="col-sm-3 control-label">{{ __('messages.admin.cancel_reasons.form.cancelled_by')}}<em class="text-danger">*</em></label>

                  <div class="col-md-7 col-sm-offset-1">
                    {!! Form::select('cancelled_by', array('Rider' => 'Rider', 'Driver' => 'Driver', 'Admin' => 'Admin', 'Company' => 'Company'), '', ['class' => 'form-control', 'id' => 'input_cancelled_by', 'placeholder' => 'Select']) !!}
                    <span class="text-danger">{{ $errors->first('cancelled_by') }}</span>
                  </div>
                </div>
                <div class="form-group">
                  <label for="input_status" class="col-sm-3 control-label">{{ __('messages.admin.cancel_reasons.form.status') }}<em class="text-danger">*</em></label>

                  <div class="col-md-7 col-sm-offset-1">
                    {!! Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']) !!}
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                  </div>
                </div>

                <!-- Translate  -->

        <div class="panel" ng-init="translations = {{json_encode(old('translations') ?: array())}};removed_translations =  [];  errors = {{json_encode($errors->getMessages())}};" ng-cloak>
                    <div class="panel-body">
                      <input type="hidden" name="removed_translations" ng-value="removed_translations.toString()">
                      <div ng-repeat="translation in translations">
                       <div class="col-sm-12 static_remove">
                          <button class="btn btn-danger btn-xs" ng-click="translations.splice($index, 1); removed_translations.push(translation.id)">
                            {{ __('messages.admin.cancel_reasons.remove')}}
                          </button>
                        </div>
                      <input type="hidden" name="translations[@{{$index}}][id]" value="@{{translation.id}}">
                         <div class="panel-header">
                      <h4 class="box-title text-center"> {{ __('messages.admin.cancel_reasons.translations')}} </h4>
                    </div>
                      <div class="row">
                       <label for="input_language_@{{$index}}" class="col-sm-3 col-form-label"> {{ __('messages.admin.cancel_reasons.form.language') }}<em class="text-danger">*</em></label>
                        <div class="col-md-7 col-sm-offset-1">
                          <div class="form-group">
                            <select name="translations[@{{$index}}][locale]" class="form-control" id="input_language_@{{$index}}" ng-model="translation.locale" >
                                <option value= "" ng-selected="translation.locale == '' || translation.locale == null" ng-show="translation.locale == ''">Select Language</option>
                                @foreach($language as $key => $translation_data)
                                  <option value="{{$key}}" ng-if="(('{{$key}}' | checkKeyValueUsedInStack : 'locale': translations) || '{{$key}}' == translation.locale) && '{{$key}}' != 'en'">{{$translation_data}}</option>
                                @endforeach
                            </select>
                            <span class="text-danger ">@{{ errors['translations.'+$index+'.locale'][0] }}</span>
                          </div>
                        </div>  
                      </div>

                    <div class="row">
                      <label for="input_reason_@{{$index}}" class="col-sm-3 col-form-label">{{ __('messages.admin.cancel_reasons.form.reason') }}<span class="required text-danger">*</span></label>
                      <div class="col-md-7 col-sm-offset-1">
                        <div class="form-group">
                        {!! Form::text('translations[@{{$index}}][reason]', '@{{translation.reason}}', ['class' => 'form-control', 'id' => 'input_reason_@{{$index}}', 'placeholder' => __('messages.admin.cancel_reasons.form.reason') ]) !!}
                            <span class="text-danger ">@{{ errors['translations.'+$index+'.reason'][0] }}</span>
                        </div>
                      </div>
                    </div>

                      <legend ng-if="$index+1 < translations.length"></legend>
                    </div>
                  </div>
                   <div class="panel-footer">
                      <div class="row" ng-show="translations.length <  {{count($language) - 1}}">
                        <div class="col-sm-10 col-sm-offset-1"  style="text-align: center;" >
                          <button type="button" class="btn btn-info" ng-click="translations.push({locale:''});" >
                            <i class="fa fa-plus"></i> {{ __('messages.admin.cancel_reasons.add_translations')}} 
                          </button>
                        </div>
                      </div>
                    </div> 

                    </div>

                <!-- Translate  -->
              </div>
              <!-- /.box-body -->
              <div class="box-footer text-center">
                <button type="submit" class="btn btn-info" name="submit" value="submit">{{ __('messages.admin.submit') }}</button>
                <a href="{{ url(LOGIN_USER_TYPE.'/cancel-reason') }}" class="btn btn-default">{{ __('messages.admin.cancel') }}</a>
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