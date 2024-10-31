@extends('admin.template')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ __('messages.admin.manage_help.add_help_sub_category') }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="dashboard"><i class="fa fa-dashboard"></i> {{ __('messages.admin.home') }}</a></li>
                <li><a href="help_subcategory"> {{ __('messages.admin.manage_help.help_sub_category') }}</a></li>
                <li class="active">{{ __('messages.admin.add') }}</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content" ng-controller="category_language">
            <div class="row">
                <!-- right column -->
                <div class="col-md-12">
                    <!-- Horizontal Form -->
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="box-title"> {{ __('messages.admin.manage_help.add_help_sub_category_form') }}</h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        {!! Form::open(['url' => 'admin/add_help_subcategory', 'class' => 'form-horizontal']) !!}
                        <div class="box-body">
                            <span class="text-danger">(*){{ __('messages.admin.fields_are_mandatory') }}</span>
                            <div class="form-group">
                                <label for="input_status" class="col-sm-3 control-label">
                                    {{ __('messages.admin.manage_help.form.language') }}<em
                                        class="text-danger">*</em></label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::select('language_code', $language, 'en', [
                                        'class' => 'form-control',
                                        'id' => 'input_status',
                                        'placeholder' => 'Select',
                                        'disabled' => 'disabled',
                                    ]) !!}
                                    <span class="text-danger">{{ $errors->first('language_code') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_name" class="col-sm-3 control-label">        {{ __('messages.admin.manage_help.form.name') }}<em
                                        class="text-danger">*</em></label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::text('name', '', ['class' => 'form-control', 'id' => 'input_name', 'placeholder' => 'Name']) !!}
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_category" class="col-sm-3 control-label">        {{ __('messages.admin.manage_help.category') }}<em
                                        class="text-danger">*</em></label>
                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::select('category_id', $category->pluck('name', 'id'), '', [
                                        'class' => 'form-control',
                                        'id' => 'input_category_id',
                                        'placeholder' => 'Select',
                                    ]) !!}
                                    <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_description" class="col-sm-3 control-label">        {{ __('messages.admin.manage_help.form.description') }}</label>

                                <div class="col-md-7 col-sm-offset-1">
                                    {!! Form::textarea('description', '', [
                                        'class' => 'form-control',
                                        'id' => 'input_description',
                                        'placeholder' => 'Description',
                                        'rows' => 3,
                                    ]) !!}
                                    <span class="text-danger">{{ $errors->first('description') }}</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="input_status" class="col-sm-3 control-label">        {{ __('messages.admin.manage_help.form.status') }}<em
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

                        <div class="panel"
                            ng-init="translations = {{ json_encode(old('translations') ?: []) }}; removed_translations =  []; errors = {{ json_encode($errors->getMessages()) }};"
                            ng-cloak>
                            <div class="panel-header">
                                <h4 class="box-title text-center">        {{ __('messages.admin.manage_help.translations') }} </h4>
                            </div>
                            <div class="panel-body">
                                <input type="hidden" name="removed_translations"
                                    ng-value="removed_translations.toString()">
                                <div class="row" ng-repeat="translation in translations">
                                    <input type="hidden" name="translations[@{{ $index }}][id]"
                                        value="@{{ translation.id }}">
                                    <div class="form-group">
                                        <label for="input_language_@{{ $index }}"
                                            class="col-sm-3 control-label">  {{ __('messages.admin.manage_help.form.language') }}<em class="text-danger">*</em></label>
                                        <div class="col-md-7 col-sm-offset-1">
                                            <select name="translations[@{{ $index }}][locale]" class="form-control"
                                                id="input_language_@{{ $index }}" ng-model="translation.locale">
                                                <option value="" ng-if="translation.locale == ''">Select Language
                                                </option>
                                                @foreach ($languages as $key => $value)
                                                    <option value="{{ $key }}"
                                                        ng-if="(('{{ $key }}' | checkKeyValueUsedInStack : 'locale': translations) || '{{ $key }}' == translation.locale) && '{{ $key }}' != 'en'">
                                                        {{ $value }}</option>
                                                @endforeach
                                            </select>
                                            <span class="text-danger ">@{{ errors['translations.' + $index + '.locale'][0] }}</span>
                                        </div>
                                        <div class="col-sm-1 p-0">
                                            <button class="btn btn-danger btn-xs"
                                                ng-click="translations.splice($index, 1); removed_translations.push(translation.id)">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="input_name_@{{ $index }}"
                                            class="col-sm-3 control-label">  {{ __('messages.admin.manage_help.form.name') }}<em class="text-danger">*</em></label>
                                        <div class="col-md-7 col-sm-offset-1">
                                            {!! Form::text('translations[@{{ $index }}][name]', '@{{ translation.name }}', [
                                                'class' => 'form-control',
                                                'id' => 'input_name_@{{ $index }}',
                                                'placeholder' => 'Name',
                                            ]) !!}
                                            <span class="text-danger ">@{{ errors['translations.' + $index + '.name'][0] }}</span>
                                        </div>
                                    </div>

                                    <div class="form-group" ng-init="multiple_editors($index)">
                                        <label for="input_content_@{{ $index }}"
                                            class="col-sm-3 control-label">  {{ __('messages.admin.manage_help.form.description') }}</label>
                                        <div class="col-md-7 col-sm-offset-1">
                                            <textarea class="form-control" id="description_@{{ $index }}"
                                                name="translations[@{{ $index }}][description]">@{{ translation.description }}</textarea>
                                            <span class="text-danger ">@{{ errors['translations.' + $index + '.description'][0] }}</span>
                                        </div>
                                    </div>

                                    <legend ng-if="$index+1 < translations.length"></legend>
                                </div>
                            </div>
                            <div class="panel-footer">
                                <div class="row" ng-show="translations.length <  {{ count($languages) - 1 }}">
                                    <div class="col-sm-10 col-sm-offset-1 text-center">
                                        <button type="button" class="btn btn-info"
                                            ng-click="translations.push({locale:''});">
                                            <i class="fa fa-plus"></i>
                                            {{ __('messages.admin.manage_help.add_translation') }}
                                        </button>
                                    </div>
                                </div>
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
