@extends('admin.template')

@section('main')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" ng-controler= '' onload="initMap()">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                {{ __('messages.admin.manage_map.map_view') }}
            </h1>
            <ol class="breadcrumb">
                <li><a href="{{ url(LOGIN_USER_TYPE . '/dashboard') }}"><i class="fa fa-dashboard"></i>
                        {{ __('messages.admin.home') }}</a></li>
                <li class="active"> {{ __('messages.admin.manage_map.map') }}</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <!-- right column -->
                <div class="col-md-12">
                    <div id="map"></div>
                    <div id="legend" style="z-index: 0; position: absolute; bottom: 127px; right: 26px;">
                        <h3>Note: </h3>
                        @if (LOGIN_USER_TYPE != 'company')
                            <div>
                                <img src="{{ url('images/marker_green.png') }}">  {{ __('messages.admin.manage_map.user') }}
                            </div>
                        @endif
                        <div>
                            <img src="{{ url('images/marker_pink.png') }}">  {{ __('messages.admin.manage_map.unavailable_driver') }}
                        </div>
                        <div>
                            <img src="{{ url('images/marker_dgreen.png') }}"> {{ __('messages.admin.manage_map.available_driver') }}
                        </div>
                        <div>
                            <img src="{{ url('images/marker_pink_plus.png') }}"> {{ __('messages.admin.manage_map.unactivated_driver') }}
                        </div>
                    </div>

                    <div id="user_details"
                        style="z-index: 0; position: absolute; bottom: 127px; left: 26px; display: none;">

                    </div>
                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
@push('scripts')
    <script>
        $('#input_dob').datepicker({
            'format': 'dd-mm-yyyy'
        });
    </script>
    <style>
        .sety {
            overflow: hidden;
            max-width: 150px;
            display: inline-block;
            white-space: nowrap;
            text-overflow: ellipsis;
            position: relative;
            top: 5px;
        }

        .close_user_details {
            float: right;
            cursor: pointer;
        }

        #map {
            height: 500px;
            width: 100%;
        }

        #legend {
            background: rgba(255, 255, 255, 0.8);
            padding: 10px;
            margin: 10px;
            border: 2px solid #f3f3f3;
        }

        #user_details {
            width: 300px;
            background: rgba(255, 255, 255, 0.8);
            padding: 10px;
            margin: 10px;
            border: 2px solid #f3f3f3;
        }

        .user_background img {
            width: 50px;
            height: 50px;
        }

        #legend h3,
        #user_details h3 {
            margin-top: 0;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
        }

        #legend img {
            width: 23px;
            height: 30px;
        }
    </style>
@endpush
