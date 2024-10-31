@extends('admin.template')
@section('main')
<div class="content-wrapper" ng-controller="statements" ng-cloak>
	<section class="content-header">
		<h1> {{ __('messages.admin.manage_statements.overall') }} <small>                 {{ __('messages.admin.manage_statements.statements') }} </small>
		</h1>
		<ol class="breadcrumb">
			<li>
				<a href="{{ url(LOGIN_USER_TYPE.'/dashboard') }}"><i class="fa fa-dashboard"></i>  {{ __('messages.admin.home') }}</a>
			</li>
			<li class="active">
				{{ __('messages.admin.manage_statements.statements') }}
			</li>
		</ol>
	</section>
	<section class="content @{{ isLoading ? 'loading' : ''}} " ng-clock >
		<div class="row">
			<div class="col-xs-12">
				<div class="box">
					<div class="box-body">
						<div class="panel panel-default">
							<div class="panel-body">
								<form method="POST" id="custom_statement" class="form-inline" role="form">
									<div class="form-group">
										<label for="name">{{ __('messages.admin.manage_statements.filter_by') }} </label><br>
										<select  ng-init="filter_by = filter_by || 'overall'" class="form-control" name="filter_by" ng-model="filter_by"  id="filter_by">
											<option value="overall">{{ __('messages.admin.manage_statements.overall') }}</option>
											<option value="daily">{{ __('messages.admin.manage_statements.today') }}</option>
											<option value="weekly">{{ __('messages.admin.manage_statements.weekly') }}</option>
											<option value="monthly">{{ __('messages.admin.manage_statements.monthly') }}</option>
											<option value="yearly">{{ __('messages.admin.manage_statements.yearly') }}</option>
											<option value="custom">{{ __('messages.admin.manage_statements.custom') }}</option>
										</select>
									</div>
									<div class="form-group" ng-if="filter_by=='custom'">
										<label for="email">{{ __('messages.admin.manage_statements.from_date') }}</label><br>
										<input type="text" class="form-control date" name="from_date" id="from_date" placeholder="From Date">
									</div>
									<div class="form-group" ng-if="filter_by=='custom'">
										<label for="email">{{ __('messages.admin.manage_statements.to_date') }}</label><br>
										<input type="text" class="form-control date" name="to_date" id="to_date" placeholder="To Date">
									</div>
									<div class="form-group">
										<br>
										<button style="margin-bottom: 5px;" type="submit" class="btn btn-primary">{{ __('messages.admin.manage_statements.search') }}</button>
									</div>
									
								</form>
							</div>
						</div>
						
						<div class="box-header">
							<div class="row">
								<div class="col-lg-3 col-xs-6">
									<div class="small-box">
										<div class="inner">
											<h3>@{{ overall_earning }}</h3>
											<p>{{LOGIN_USER_TYPE=='company'?__('messages.admin.manage_statements.table.earnings'):__('messages.admin.manage_statements.total_amount_received')}}</p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-xs-6">
									<div class="small-box">
										<div class="inner">
											<h3>@{{ overall_commission }}</h3>
											<p>{{LOGIN_USER_TYPE=='company'?__('messages.admin.manage_statements.table.admin_commission') :__('messages.admin.manage_statements.total_earnings')}}</p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-xs-6">
									<div class="small-box">
										<div class="inner">
											<h3>@{{ overall_rides }}</h3>
											<p>{{ __('messages.admin.manage_statements.completed_rides') }}</p>
										</div>
									</div>
								</div>
								<div class="col-lg-3 col-xs-6">
									<div class="small-box">
										<div class="inner">
											<h3>@{{ cancelled_rides }}</h3>
											<p>{{ __('messages.admin.manage_statements.cancelled_rides') }}</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="table-responsive">
							<table id="statement_table" class="table table-condensed">
								<thead>
						            <tr>
						                <th ng-repeat="column in table_columns"> @{{ column.title }} </th>
						            </tr>
						        </thead>
						        <tbody>
						            <tr ng-repeat="statement in statements">
						                <td ng-repeat="column in table_columns">
						                	<p ng-if="column.name != 'action'"> @{{ statement[column.data] }} </p>
						                	<p ng-if="column.name == 'action'"> <a href="@{{ statement[column.data] }}" class="btn btn-xs btn-primary"> {{ __('messages.admin.manage_statements.view_trip_details') }}</a> </p>
						                </td>
						            </tr>
						        </tbody>
							</table>
						</div>

						<div class="pull-right">
							<statements-pagination></statements-pagination>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
@endsection
@push('scripts')
<link rel="stylesheet" href="{{ url('css/buttons.dataTables.css') }}">
<script src="{{ url('js/dataTables.buttons.js') }}"></script>
<script src="{{ url('js/buttons.server-side.js') }}"></script>

<script>

app.controller('statements', ['$scope', '$http', function($scope, $http) {
	$scope.count_text = "Overall Statement";
	$scope.isLoading = true;

	$('#custom_statement').on('submit', function(event) {
		$scope.getStatmentData();
		event.preventDefault();
	});

	$scope.getStatementCounts = function() {
		$http.post(APP_URL+"/{{LOGIN_USER_TYPE}}/get_statement_counts", { from_dates: $('#from_date').val(), to_dates: $('#to_date').val(), filter_type: $('#filter_by').val() }).then(function( response ) {
			$scope.count_text=response.data.count_text;
			$scope.overall_earning=response.data.overall_earning;
			$scope.overall_commission=response.data.overall_commission;
			$scope.overall_rides=response.data.total_rides;
			$scope.cancelled_rides=response.data.cancelled_rides;
			setTimeout(() => $('button[type="submit"]').prop('disabled', false) , 0);
			$scope.isLoading = false;
		});
	};

	$scope.statements = [];
	$scope.totalPages = 0;
	$scope.currentPage = 1;
	$scope.range = [];
	$scope.offset = 3;

	$scope.generatepageNumber = function(pagination) {
		if (!pagination.to) {
			return [];
		}
		let from = pagination.current_page - $scope.offset;
		if (from < 1) {
			from = 1;
		}
		let to = from + ($scope.offset * 2);
		if (to >= pagination.last_page) {
			to = pagination.last_page;
		}
		let pagesArray = [];
		for (let page = from; page <= to; page++) {
			pagesArray.push(page);
		}
		return pagesArray;
	};

	$scope.getStatmentData = function(pageNumber = 1) {
		$scope.isLoading = true;
		let url = '{{ url(LOGIN_USER_TYPE."/statement_all")  }}';
		let data = {
			filter_type : $('#filter_by').val(),
			from_dates : $('#from_date').val(),
			to_dates : $('#to_date').val(),
		};

		$http.post(url+'?page='+pageNumber,data).success(function(response) {
			$scope.getStatementCounts();
			$scope.statements   = response.data;
			$scope.totalPages   = response.last_page;
			$scope.currentPage  = response.current_page;

			$scope.range = $scope.generatepageNumber(response);
		});
	};

	let bookingId = "{{__('messages.admin.manage_statements.table.booking_id')}}";
	let companyName = "{{__('messages.admin.manage_statements.table.company_name')}}";
	let pickupLocation = "{{__('messages.admin.manage_statements.table.pickup_location')}}";
	let dropLocation = "{{__('messages.admin.manage_statements.table.drop_location')}}";
	let adminCommission = "{{__('messages.admin.manage_statements.table.admin_commission')}}";
	let datedOn = "{{__('messages.admin.manage_statements.table.dated_on')}}";
	let adminPayoutStatus = "{{__('messages.admin.manage_statements.table.admin_payout_status')}}";
	let tripDetails = "{{__('messages.admin.manage_statements.table.trip_details')}}";
	let Status = "{{__('messages.admin.manage_statements.table.status')}}";
	let Earned = "{{__('messages.admin.manage_statements.table.earned')}}";

	$scope.table_columns = [{data: 'id', name: 'id', title: bookingId}];
	if(LOGIN_USER_TYPE == 'admin') {
		$scope.table_columns.push({data: 'company_name', name: 'company_name', title: companyName});
	}
	$scope.table_columns.push(
		{data: 'pickup_location',name: 'pickup_location',title: pickupLocation},
		{data: 'drop_location',name: 'drop_location',title:dropLocation},
		{data: 'action',name: 'action',title: tripDetails,orderable: false,searchable: false},
		{data: 'commission',name: 'commission',title: adminCommission,searchable: false},
		{data: 'admin_payout_status',name: 'admin_payout_status',title: adminPayoutStatus,orderable: false,searchable: false},
		{data: 'created_at',name: 'created_at',title: datedOn},
		{data: 'status',name: 'status',title: Status},
		{data: 'total_amount',name: 'driver_payout',title: Earned}
	);
	
	$(document).ready(function() {
		$scope.getStatmentData();
		$( "#filter_by").change(function() {
			var value = $("#filter_by option:selected").val();
			if(value =='orders') {
				$('#from_date').datepicker('option', 'maxDate', '')
				$('#from_date').datepicker('refresh');
				$('#to_date').datepicker('option', 'maxDate', '')
				$('#to_date').datepicker('refresh');
			}
			else {
				var nowTemp = new Date();
				var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
				var checkin = $('#from_date').datepicker({
					minDate: '-1',
					forceParse: false,
					multidate: false,
					autoclose: true
				}).on('changeDate', function(ev) {
					if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {
						var newDate = new Date(ev.date);
						newDate.setDate(newDate.getDate() + 1);
						checkout.datepicker("update", newDate);
					}
					var newDate = new Date(ev.date);
					newDate.setDate(newDate.getDate() + 1);
					checkout.datepicker("setStartDate", newDate);
					$('#to_date')[0].focus();
				});
				var checkout = $('#to_date').datepicker({
					minDate: '0',
					forceParse: false,
					beforeShowDay: function(date) {
						if (!checkin.datepicker("getDate").valueOf()) {
							return date.valueOf() >= new Date().valueOf();
						}
						return date.valueOf() > checkin.datepicker("getDate").valueOf();
					},
					autoclose: true
				});
			}
		});
	});
}]);
</script>
@endpush