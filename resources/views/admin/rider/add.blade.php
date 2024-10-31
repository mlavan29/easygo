@extends('admin.template')
@section('main')
<div class="content-wrapper" ng-controller="destination_admin">
	<section class="content-header">
		<h1> {{__('messages.admin.manage_riders_page.add_rider')}} </h1>
		<ol class="breadcrumb">
			<li>
				<a href="{{ url(LOGIN_USER_TYPE.'/dashboard') }}"> <i class="fa fa-dashboard"> </i> {{__('messages.admin.home')}} </a>
			</li>
			<li>
				<a href="{{ url(LOGIN_USER_TYPE.'/rider') }}"> {{__('messages.admin.manage_riders_page.riders')}} </a>
			</li>
			<li class="active">{{__('messages.admin.add')}}  </li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title"> {{__('messages.admin.manage_riders_page.add_rider_form')}} </h3>
					</div>
					{!! Form::open(['url' => 'admin/add_rider', 'class' => 'form-horizontal']) !!}
					<div class="box-body">
						<span class="text-danger">(*){{__('messages.admin.fields_are_mandatory')}}</span>
						<div class="form-group">
							<label for="input_first_name" class="col-sm-3 control-label">{{__('messages.admin.manage_riders_page.form.first_name')}}<em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('first_name', '', ['class' => 'form-control', 'id' => 'input_first_name', 'placeholder' => 'First Name']) !!}
								<span class="text-danger">{{ $errors->first('first_name') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_last_name" class="col-sm-3 control-label">{{__('messages.admin.manage_riders_page.form.last_name')}}<em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('last_name', '', ['class' => 'form-control', 'id' => 'input_last_name', 'placeholder' => 'Last Name']) !!}
								<span class="text-danger">{{ $errors->first('last_name') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_email" class="col-sm-3 control-label">{{__('messages.admin.manage_riders_page.form.email')}}<em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('email', '', ['class' => 'form-control', 'id' => 'input_email', 'placeholder' => 'Email']) !!}
								<span class="text-danger">{{ $errors->first('email') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_password" class="col-sm-3 control-label">{{__('messages.admin.manage_riders_page.form.password')}}<em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('password', '', ['class' => 'form-control', 'id' => 'input_password', 'placeholder' => 'Password']) !!}
								<span class="text-danger">{{ $errors->first('password') }}</span>
							</div>
						</div>
						{!! Form::hidden('user_type','Rider', ['class' => 'form-control', 'id' => 'user_type', 'placeholder' => 'Select']) !!}
						<div class="form-group">
							<label for="input_status" class="col-sm-3 control-label">{{__('messages.admin.manage_riders_page.form.country_code')}}<em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								<select class ='form-control' id = 'input_country_code' name='country_code' >
									@foreach($country_code_option as $country_code)
									<option value="{{@$country_code->phone_code}}" data-id="{{ $country_code->id }}" {{ ($country_code->id == old('country_id')) ? 'Selected' : ''}}>{{$country_code->long_name}}</option>
									@endforeach
									{!! Form::hidden('country_id', old('country_id'), array('id'=>'country_id')) !!}
								</select>
								<span class="text-danger">{{ $errors->first('country_code') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="gender" class="col-sm-3 control-label">{{__('messages.admin.manage_riders_page.form.gender')}} <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{{ Form::radio('gender', '1', '', ['class' => 'form-check-input gender', 'id'=>'g_male']) }}
								<label for="g_male" style="font-weight: normal !important;">{{__('messages.profile.male')}}</label>
								{{ Form::radio('gender', '2', '', ['class' => 'form-check-input gender', 'id'=>'g_female']) }}
								<label for="g_female" style="font-weight: normal !important;">{{__('messages.profile.female')}}</label>
								<div class="text-danger">{{ $errors->first('gender') }}</div>
							</div>
						</div>
						<div class="form-group">
							<label for="input_status" class="col-sm-3 control-label">{{__('messages.admin.manage_riders_page.form.mobile_number')}} <em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::text('mobile_number', '', ['class' => 'form-control', 'id' => 'mobile_number', 'placeholder' => 'Mobile Number']) !!}
								<span class="text-danger">{{ $errors->first('mobile_number') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_password" class="col-sm-3 control-label">{{__('messages.admin.manage_riders_page.form.home_location')}}</label>
							<div class="col-md-7 col-sm-offset-1">
								<div class="autocomplete-input-container">
									<div class="autocomplete-input">
										{!! Form::text('home_location', @$location->home_location, ['class' => 'form-control', 'id' => 'input_home_location', 'placeholder' => 'Home Location','autocomplete' => 'off']) !!}
									</div>
									<ul class="autocomplete-results home-autocomplete-results">
									</ul>
								</div>
								<span class="text-danger">{{ $errors->first('home_location') }}</span>
							</div>
						</div>
						{!! Form::hidden('home_latitude',@$location->home_latitude, ['class' => 'form-control', 'id' => 'home_latitude', 'placeholder' => 'Select']) !!}
						{!! Form::hidden('home_longitude',@$location->home_longitude, ['class' => 'form-control', 'id' => 'home_longitude', 'placeholder' => 'Select']) !!}
						<div class="form-group">
							<label for="input_password" class="col-sm-3 control-label">{{__('messages.admin.manage_riders_page.form.office_location')}}</label>
							<div class="col-md-7 col-sm-offset-1">
								<div class="autocomplete-input-container">
									<div class="autocomplete-input">
										{!! Form::text('work_location', @$location->work_location, ['class' => 'form-control', 'id' => 'input_work_location', 'placeholder' => 'Work Location','autocomplete' => 'off']) !!}
									</div>
									<ul class="autocomplete-results work-autocomplete-results">
									</ul>
								</div>
								<span class="text-danger">{{ $errors->first('work_location') }}</span>
							</div>
						</div>
						<div class="form-group">
							<label for="input_status" class="col-sm-3 control-label">{{__('messages.admin.manage_riders_page.form.status')}}<em class="text-danger">*</em></label>
							<div class="col-md-7 col-sm-offset-1">
								{!! Form::select('status', array('Active' => 'Active', 'Inactive' => 'Inactive'), '', ['class' => 'form-control', 'id' => 'input_status', 'placeholder' => 'Select']) !!}
								<span class="text-danger">{{ $errors->first('status') }}</span>
							</div>
						</div>
						{!! Form::hidden('work_latitude',@$location->work_latitude, ['class' => 'form-control', 'id' => 'work_latitude', 'placeholder' => 'Select']) !!}
						{!! Form::hidden('work_longitude',@$location->work_longitude, ['class' => 'form-control', 'id' => 'work_longitude', 'placeholder' => 'Select']) !!}
					</div>
					<div class="box-footer text-center">
						<button type="submit" class="btn btn-info" name="submit" value="submit">{{__('messages.admin.submit')}}</button>
						<button type="submit" class="btn btn-default" name="cancel" value="cancel">{{__('messages.admin.cancel')}}</button>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
