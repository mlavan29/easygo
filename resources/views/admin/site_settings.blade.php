@extends('admin.template')
@section('main')
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 30px;
  height: 17px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 13px;
  width: 13px;
  left: 2px;
  bottom: 2px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #f6c92f;
}

input:focus + .slider {
  box-shadow: 0 0 1px #f6c92f;
}

input:checked + .slider:before {
  -webkit-transform: translateX(13px);
  -ms-transform: translateX(13px);
  transform: translateX(13px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>

<div class="content-wrapper">
	<section class="content-header">
		<h1> {{__('messages.admin.site_setting.title')}} </h1>
		<ol class="breadcrumb">
			<li><a href="{{ url(LOGIN_USER_TYPE.'/dashboard') }}"><i class="fa fa-dashboard"></i>  {{__('messages.admin.home')}}</a></li>
			<li><a href="#">{{__('messages.admin.site_setting.title')}} </a></li>
			<li class="active">{{__('messages.admin.edit')}} </li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">{{__('messages.admin.site_setting.site_settings_form')}}</h3>
					</div>
					{!! Form::open(['url' => 'admin/site_setting', 'class' => 'form-horizontal', 'files' => true]) !!}
					<div class="box-body">
						<span class="text-danger">(*){{ __('messages.admin.fields_are_mandatory') }}</span>
						<div class="form-group">
							<label for="input_site_name" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.site_name')}}<em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('site_name', site_settings('site_name'), ['class' => 'form-control', 'id' => 'input_site_name', 'placeholder' => __('messages.admin.site_setting.form.site_name')]) !!}
								<span class="text-danger">{{ $errors->first('site_name') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_site_name" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.version')}}</label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('version', site_settings('version'), ['class' => 'form-control', 'id' => 'input_version', 'placeholder' => __('messages.admin.site_setting.form.version')]) !!}
								<span class="text-danger">{{ $errors->first('version') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_logo" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.header_logo')}}</label>
							<div class="col-md-7 col-sm-offset-1">
							<em>Size: 140x80</em>
								{!! Form::file('logo', ['class' => 'form-control', 'id' => 'input_logo', 'accept' => 'image/*']) !!}
								<span class="text-danger">{{ $errors->first('logo') }}</span>
								<img src="{{ $logo_url }}" class="image-cls">
							</div>
						</div>
						<div class="form-group">
							<label for="input_logo" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.header_white_logo')}}</label>
							<div class="col-md-7 col-sm-offset-1">
							<em>Size: 140x80</em>
								{!! Form::file('page_logo', ['class' => 'form-control', 'id' => 'input_page_logo', 'accept' => 'image/*']) !!}
								<span class="text-danger">{{ $errors->first('page_logo') }}</span>
								<img src="{{ url(PAGE_LOGO_URL).'?v='.rand() }}" class="image-cls">
							</div>
						</div>
						<div class="form-group">
							<label for="input_favicon" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.favicon')}}</label>
							<div class="col-md-7 col-sm-offset-1">
							<em>Size: 16x16</em>
								{!! Form::file('favicon', ['class' => 'form-control', 'id' => 'input_favicon', 'accept' => 'image/*']) !!}
								<span class="text-danger">{{ $errors->first('favicon') }}</span>
								<img src="{{ $favicon.'?v='.rand() }}" class="fav_class">
							</div>
						</div>


						<div class="form-group">
							<label for="input_timezone" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.timezones')}}</label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::select('timezone', $timezones,site_settings('timezone'), ['class' => 'form-control', 'id' => 'input_timezone']) !!}
								<span class="text-danger">{{ $errors->first('timezone') }}</span>
							</div>
						</div>

						<div class="form-group">
							<label for="input_default_currency" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.default_currency')}}</label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::select('default_currency', $currency, $default_currency, ['class' => 'form-control', 'id' => 'input_default_currency']) !!}
								<span class="text-danger">{{ $errors->first('default_currency') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_payment_currency" class="col-sm-3 control-label">
								{{__('messages.admin.site_setting.form.payment_currency')}}
								<br>
								<span style="font-size: 12px;">
									{{__('messages.admin.site_setting.note')}}
								</span>
							</label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::select('payment_currency', $currency, site_settings('payment_currency'), ['class' => 'form-control', 'id' => 'input_payment_currency']) !!}
								<span class="text-danger">{{ $errors->first('payment_currency') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_trip_default_paymode" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.trip_default_payment_method')}}</label>
							<div class="col-md-7 col-sm-offset-1" ng-init="trip_default = '{{payment_gateway('trip_default','Common')}}'">
								<select name="trip_default_paymode" ng-model="trip_default" class="form-control" id="input_trip_default_paymode">
									@foreach($payment_methods as $pay_method)
										<option value="{{ $pay_method['key'] }}"> {{ $pay_method['value'] }} </option>
									@endforeach
								</select>
								<span class="text-danger">{{ $errors->first('trip_default_paymode') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_site_name" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.driver_kilometer')}}</label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::number('driver_km', site_settings('driver_km'), ['class' => 'form-control', 'id' => 'input_head_code', 'placeholder' => 'Driver kilo meter', 'min'=>'1', 'oninput'=>'validity.valid||(value="");']) !!}
								<span class="text-danger">{{ $errors->first('driver_km') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_site_name" class="col-sm-3 control-label">
								{{__('messages.admin.site_setting.form.pickup_kilometer')}} <br>
								<small>(*{{__('messages.admin.site_setting.pool')}})</small>
							</label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::number('pickup_km', site_settings('pickup_km'), ['class' => 'form-control', 'id' => 'input_head_code', 'placeholder' => 'Pickup kilo meter', 'min'=>'1', 'oninput'=>'validity.valid||(value="");']) !!}
								<span class="text-danger">{{ $errors->first('pickup_km') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_site_name" class="col-sm-3 control-label">
								{{__('messages.admin.site_setting.form.drop_kilometer')}}</br>
								<small>(* {{__('messages.admin.site_setting.pool')}})</small>
							</label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::number('drop_km', site_settings('drop_km'), ['class' => 'form-control', 'id' => 'input_head_code', 'placeholder' => 'Drop kilo meter', 'min'=>'1', 'oninput'=>'validity.valid||(value="");']) !!}
								<span class="text-danger">{{ $errors->first('drop_km') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_site_name" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.head_code')}}</label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::textarea('head_code', site_settings('head_code'), ['class' => 'form-control', 'id' => 'input_head_code', 'placeholder' => 'Head Code']) !!}
								<span class="text-danger">{{ $errors->first('head_code') }}</span>
							</div>
						</div>
						
						<div class="form-group">
							<label for="input_default_language" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.default_language')}}</label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::select('default_language', $language, $default_language[0]->value, ['class' => 'form-control', 'id' => 'input_default_language']) !!}
								<span class="text-danger">{{ $errors->first('default_language') }}</span>
							</div>
						</div>

						<div class="form-group">
							<label for="input_admin_country_code" class="col-sm-3 control-label">
								{{__('messages.admin.site_setting.form.country_code')}} <em class="text-danger">*</em>
							</label>
							<div class="col-md-7 col-sm-offset-1">
								<select class='form-control' id = 'input_admin_country_code' name='admin_country_code' >
									<option value="" disabled> Select </option>
									@foreach($countries as $country_code)
									<option value="{{ $country_code->id }}" {{ ($country_code->id == old('admin_country_code',site_settings('admin_country_code'))) ? 'Selected' : ''}} >{{$country_code->long_name}}</option>
									@endforeach
								</select>
								<span class="text-danger">{{ $errors->first('admin_country_code') }}</span>
							</div>
						</div>

						<div class="form-group">
							<label for="input_mobile_number" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.manual_booking_contact_number')}} <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('admin_contact', old('admin_contact',site_settings('admin_contact')), ['class' => 'form-control', 'id' => 'input_head_code', 'placeholder' => 'Contact Number']) !!}
								<span class="text-danger">{{ $errors->first('admin_contact') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_heat_map" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.heat_map')}} <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::select('heat_map',['On'=>'On','Off'=>'Off'], old('heat_map',site_settings('heat_map')), ['class' => 'form-control', 'id' => 'input_heat_map']) !!}
								<span class="text-danger">{{ $errors->first('heat_map') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_heat_map_hours" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.heat_map_hours')}} <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('heat_map_hours', old('heat_map_hours',site_settings('heat_map_hours')), ['class' => 'form-control', 'id' => 'input_heat_map_hours', 'placeholder' => 'Heat Map Hours']) !!}
								<span class="text-danger">{{ $errors->first('heat_map_hours') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_update_loc_interval" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.update_location_interval')}} <i id="interval-tooltip" data-toggle="tooltip" data-html="true"  class="glyphicon  glyphicon-info-sign" title="Interval in Seconds to update driver's current location"></i> <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('update_loc_interval', old('update_loc_interval',site_settings('update_loc_interval')), ['class' => 'form-control', 'id' => 'input_update_loc_interval', 'placeholder' => 'Update Location Interval']) !!}
								<span class="text-danger">{{ $errors->first('update_loc_interval') }}</span>
							</div>
						</div>

						@php
						$social_logins = site_settings('social_logins');
						$social_logins = explode(',',$social_logins);
						@endphp

					<!--	<div class="form-group">
							<label for="input_site_name" class="col-sm-3 control-label">Facebook Login</label>
							<div class="col-md-7 col-sm-offset-1" style="padding-top: 7px;margin-bottom: 0;">
								<label class="switch">
									{!! Form::checkbox('social_logins[]', 'facebook', in_array('facebook',$social_logins)) !!}
									<span class="slider round"></span>
								</label>
							</div>
						</div>

						<div class="form-group">
							<label for="input_site_name" class="col-sm-3 control-label">Google Login</label>
							<div class="col-md-7 col-sm-offset-1" style="padding-top: 7px;margin-bottom: 0;">
								<label class="switch">
									{!! Form::checkbox('social_logins[]', 'google', in_array('google',$social_logins)) !!}
									<span class="slider round"></span>
								</label>
							</div>
						</div>

						<div class="form-group">
							<label for="input_site_name" class="col-sm-3 control-label">Apple Login</label>
							<div class="col-md-7 col-sm-offset-1" style="padding-top: 7px;margin-bottom: 0;">
								<label class="switch">
									{!! Form::checkbox('social_logins[]', 'apple', in_array('apple',$social_logins)) !!}
									<span class="slider round"></span>
								</label>
								<br>
								<b><small>Note: Enable Apple Login for Your Iphone Users</small></b>
							</div>
						</div>-->

						<div class="form-group">
							<label for="input_site_name" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.otp_verification')}}   <i id="interval-tooltip" data-toggle="tooltip" data-html="true"  class="glyphicon  glyphicon-info-sign" title="This otp for phone number verification on when you create an account"></i>
							</label>
							<div class="col-md-7 col-sm-offset-1" style="padding-top: 7px;margin-bottom: 0;">
								<label class="switch">
									{!! Form::checkbox('otp_verification', 1, site_settings('otp_verification')) !!}
									<span class="slider round"></span>
								</label>
							</div>
						</div>
						<div class="form-group">
							<label for="input_site_name" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.covid_feature')}}</label>
							<div class="col-md-7 col-sm-offset-1" style="padding-top: 7px;margin-bottom: 0;">
								<label class="switch">
									{!! Form::checkbox('covid_enable', 1, site_settings('covid_enable')) !!}
									<span class="slider round"></span>
								</label>
							</div>
						</div>
						<div class="form-group">
							<label for="driver_request_seconds" class="col-sm-3 control-label">
								{{__('messages.admin.site_setting.form.driver_request_seconds')}}<em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('driver_request_seconds', old('driver_request_seconds',site_settings('driver_request_seconds')), ['class' => 'form-control','placeholder' => 'Driver Request Seconds']) !!}
								<span class="text-danger">{{ $errors->first('driver_request_seconds') }}</span>
							</div>
						</div>

						<div class="form-group">
							<label for="input_mobile_number" class="col-sm-3 control-label">	{{__('messages.admin.site_setting.form.driver_request_limit')}}<i id="interval-tooltip" data-toggle="tooltip" data-html="true"  class="glyphicon  glyphicon-info-sign" title="This is the maximum driver limit while sending the trip request."></i><em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('driver_request_limit', old('driver_request_limit',site_settings('driver_request_limit')), ['class' => 'form-control', 'id' => 'input_head_code', 'placeholder' => __('messages.admin.site_setting.form.driver_request_limit')]) !!}
								<span class="text-danger">{{ $errors->first('driver_request_limit') }}</span>
							</div>
						</div>
							<div class="form-group">
							<label for="input_mobile_number" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.pay_to_admin_driver_limit')}}</i><em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('driver_payout_limit', old('driver_payout_limit',site_settings('driver_payout_limit')), ['class' => 'form-control', 'id' => 'input_head_code', 'placeholder' => 'Driver Request Limit']) !!}
								<span class="text-danger">{{ $errors->first('driver_payout_limit') }}</span>
							</div>
						</div>
						

						<div class="form-group">
							<label for="input_mobile_number" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.copyright_year')}}<em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('copyright_year', old('copyright_year',site_settings('copyright_year')), ['class' => 'form-control', 'id' => 'input_head_code', 'placeholder' => __('messages.admin.site_setting.form.copyright_year')]) !!}
								<span class="text-danger">{{ $errors->first('copyright_year') }}</span>
							</div>
						</div>

						<div class="form-group">
							<label for="input_mobile_number" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.copyright_url')}} <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('copyright_url', old('copyright_url',site_settings('copyright_url')), ['class' => 'form-control', 'id' => 'input_head_code', 'placeholder' => 'https://yourdomain.com']) !!}
								<span class="text-danger">{{ $errors->first('copyright_url') }}</span>
							</div>
						</div>

						<div class="form-group">
							<label for="input_mobile_number" class="col-sm-3 control-label">{{__('messages.admin.site_setting.form.copyright_name')}} <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('copyright_name', old('copyright_name',site_settings('copyright_name')), ['class' => 'form-control', 'id' => 'input_head_code', 'placeholder' => __('messages.admin.site_setting.form.copyright_name')]) !!}
								<span class="text-danger">{{ $errors->first('copyright_name') }}</span>
							</div>
						</div>
					</div>
					<div class="box-footer text-center">
						<button type="submit" class="btn btn-info" name="submit" value="submit">{{ __('messages.admin.submit') }}</button>
						<button type="reset" class="btn btn-default" name="cancel" value="cancel">{{ __('messages.admin.cancel') }}</button>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
@push('scripts')

@endpush
