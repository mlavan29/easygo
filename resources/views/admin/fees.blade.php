@extends('admin.template')
@section('main')
<div class="fees-wrap content-wrapper">
	<section class="content-header">
		<h1>
		{{__('messages.admin.mange_fees.fees')}}
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="{{ url(LOGIN_USER_TYPE.'/dashboard') }}">
					<i class="fa fa-dashboard"></i>
					{{__('messages.admin.home')}}
				</a>
			</li>
			<li>
				<a href="#">
					{{__('messages.admin.mange_fees.fees')}}
				</a>
			</li>
			<li class="active">
				{{__('messages.admin.edit')}}
			</li>
		</ol>
	</section>
	<section class="content">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<h3 class="box-title">		{{__('messages.admin.mange_fees.fees_form')}}</h3>
					</div>
					{!! Form::open(['url' => 'admin/fees', 'class' => 'form-horizontal']) !!}
					<div class="box-body">
						<div class="form-group">
							<label for="input_service_fee" class="col-sm-3 control-label">{{__('messages.admin.mange_fees.form.rider_service_fee')}}</label>
							<div class="col-md-7 col-sm-offset-1">
								<div class="input-group">
									{!! Form::text('access_fee', fees('access_fee'), ['class' => 'form-control', 'id' => 'input_service_fee', 'placeholder' => 'Rider Service Fee']) !!}
									<div class="input-group-addon" >%</div>
									<span class="text-danger">{{ $errors->first('access_fee') }}</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="input_service_fee" class="col-sm-3 control-label">
								{{__('messages.admin.mange_fees.form.driver_peak_fare')}} 
							</label>
							<div class="col-md-7 col-sm-offset-1">
								<div class="input-group">
									{!! Form::text('driver_peak_fare', fees('driver_peak_fare'), ['class' => 'form-control', 'id' => 'input_driver_peak_fare', 'placeholder' => 'Driver Peak Fare']) !!}
									<div class="input-group-addon" >%</div>
									<span class="text-danger">{{ $errors->first('driver_peak_fare') }}</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="input_additional_rider_fare" class="col-sm-3 control-label">
								{{__('messages.admin.mange_fees.form.is_pool')}}   <small>({{__('messages.admin.mange_fees.form.is_pool_small')}}</small>
							</label>
							<div class="col-md-7 col-sm-offset-1">
								<div class="input-group">
									{!! Form::text('additional_rider_fare', fees('additional_rider_fare'), ['class' => 'form-control', 'id' => 'input_additional_rider_fare', 'placeholder' => 'Additional Rider Fare']) !!}
									<div class="input-group-addon" >%</div>
									<span class="text-danger">{{ $errors->first('additional_rider_fare') }}</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="input_service_fee" class="col-sm-3 control-label">
								{{__('messages.admin.mange_fees.form.driver_service_fee')}}
							</label>
							<div class="col-md-7 col-sm-offset-1">
								<div class="input-group">
									{!! Form::text('driver_service_fee', fees('driver_access_fee'), ['class' => 'form-control', 'id' => 'input_driver_service_fee', 'placeholder' => 'Driver Service Fee']) !!}
									<div class="input-group-addon" >%</div>
									<span class="text-danger">{{ $errors->first('driver_service_fee') }}</span>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="input_additional_fee" class="col-sm-3 control-label">
								{{__('messages.admin.mange_fees.form.apply_trip_additional_fee')}}
							</label>
							<div class="col-md-7 col-sm-offset-1">
								<div class="input-group">
									{!! Form::select('additional_fee', array_merge(['Yes' =>'Yes','No' =>'No']),fees('additional_fee'), ['class' => 'form-control', 'id' => 'input_additional_fee']) !!}
									<span class="text-danger">{{ $errors->first('additional_fee') }}</span>
								</div>
							</div>
						</div>
					</div>
					<div class="box-footer text-center">
						<button type="submit" class="btn btn-info" name="submit" value="submit">{{ __('messages.admin.submit') }}</button>
						<button type="reset" class="btn btn-default" name="cancel">{{ __('messages.admin.cancel') }}</button>
					</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
@push('scripts')
<style type="text/css">
	.input-group-addon {
		background-color: #eee !important;
	}
</style>
@endpush
