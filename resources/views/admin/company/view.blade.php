@extends('admin.template')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" ng-controller="company_management">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ __('messages.admin.manage_company_page.title') }}
                <small>{{ __('messages.admin.control_panel') }}</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url(LOGIN_USER_TYPE . '/dashboard') }}"><i class="fa fa-dashboard"></i>
                        {{ __('messages.admin.home') }}</a></li>
                <li class="active"> {{ __('messages.admin.manage_company_page.title') }}</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-xs-12">

                    <div class="box">
                        <div class="box-header">
                            <!-- <h3 class="box-title">Manage Company</h3> -->
                            @if (Auth::guard('admin')->user()->can('create_company'))
                                <div style="float:right;"><a class="btn btn-success"
                                        href="{{ url('admin/add_company') }}">{{ __('messages.admin.manage_company_page.add_company') }}</a></div>
                            @endif
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body companey-list">
                            {!! $dataTable->table() !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@push('scripts')
    <style type="text/css">
        .company_driver_list {
            width: 300px;
            overflow-wrap: break-word;
        }
    </style>
    <link rel="stylesheet" href="{{ url('css/buttons.dataTables.css') }}">
    <script src="{{ url('js/dataTables.buttons.js') }}"></script>
    <script src="{{ url('js/buttons.server-side.js') }}"></script>
    {!! $dataTable->scripts() !!}
@endpush
