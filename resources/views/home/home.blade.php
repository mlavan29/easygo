@extends('templatesign')

@section('main')
    <div class="" ng-controller="user">
        <div class="topbanner">
            <div class="container">
                <div class="col-lg-12 displayflex">
                    <div class="col-lg-6 col-md-6">
                        <div class="topbannertxt">
                            <h1>{{ trans('messages.home.title') }}</h1>

                            <p>{{ trans('messages.home.desc') }}</p>
                            {{-- Form start --}}
                            
								
									<div class="row">
										<div class="col-12" data-animation="fadeInLeft" data-delay="1s"
										style="animation-delay: 1s;">
										<div class="container-body rounded p-5">
											<form>
												<div class="row g-3">
													<div class="col-12">
														<select class="form-select" aria-label="Default select example">
															<option selected>Select Your Car type</option>
															<option value="1">VW Golf VII</option>
															<option value="2">Audi A1 S-Line</option>
															<option value="3">Toyota Camry</option>
															<option value="4">BMW 320 ModernLine</option>
														</select>
													</div>
													<div class="col-12">
														<div class="input-group">
															<div
																class="d-flex align-items-center bg-light text-body rounded-start p-2">
																<span class="fas fa-map-marker-alt"></span> <span
																	class="ms-1">Pick Up</span>
															</div>
															<input class="form-control" type="text"
																placeholder="Enter a City or Airport"
																aria-label="Enter a City or Airport">
														</div>
													</div>
													<div class="col-12">
														<a href="#" class="text-start text-white d-block mb-2">Need a
															different drop-off location?</a>
														<div class="input-group">
															<div
																class="d-flex align-items-center bg-light text-body rounded-start p-2">
																<span class="fas fa-map-marker-alt"></span><span class="ms-1">Drop
																	off</span>
															</div>
															<input class="form-control" type="text"
																placeholder="Enter a City or Airport"
																aria-label="Enter a City or Airport">
														</div>
													</div>
													<div class="col-12">
														<div class="input-group">
															<div
																class="d-flex align-items-center bg-light text-body rounded-start p-2">
																<span class="fas fa-calendar-alt"></span><span class="ms-1">Pick
																	Up</span>
															</div>
															<input class="form-control" type="date">
															<select class="form-select ms-3" aria-label="Default select example">
																<option selected>12:00AM</option>
																<option value="1">1:00AM</option>
																<option value="2">2:00AM</option>
																<option value="3">3:00AM</option>
																<option value="4">4:00AM</option>
																<option value="5">5:00AM</option>
																<option value="6">6:00AM</option>
																<option value="7">7:00AM</option>
															</select>
														</div>
													</div>
													<div class="col-12">
														<div class="input-group">
															<div
																class="d-flex align-items-center bg-light text-body rounded-start p-2">
																<span class="fas fa-calendar-alt"></span><span class="ms-1">Drop
																	off</span>
															</div>
															<input class="form-control" type="date">
															<select class="form-select ms-3" aria-label="Default select example">
																<option selected>12:00AM</option>
																<option value="1">1:00AM</option>
																<option value="2">2:00AM</option>
																<option value="3">3:00AM</option>
																<option value="4">4:00AM</option>
																<option value="5">5:00AM</option>
																<option value="6">6:00AM</option>
																<option value="7">7:00AM</option>
															</select>
														</div>
													</div>
													<div class="col-12">
														<button class="btn btn-light w-100 py-4">Book Now</button>
													</div>
												</div>
											</form>
										</div>
									</div>
									</div>
								
							
                            {{-- Form end --}}
                            <ul>
                                <li>
                                    @if ($app_links[0]->value != '')
                                        <a href="{{ $app_links[0]->value }}" target="_blank"><img src="images/new/app.png"
                                                alt="app"></a>
                                    @endif
                                </li>
                                <li>
                                    @if ($app_links[2]->value != '')
                                        <a href="{{ $app_links[2]->value }}" target="_blank">
                                            <img src="{{ url('images/new/google.png') }}" alt="Get it on Googleplay"
                                                class="CToWUd bot_footimg">
                                        </a>
                                    @endif
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="topbannerimg">
                            <img src="images/new/topbanner.png" alt="banner">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="alllogin">
            <div class="container">
                @if (Auth::user() == null)
                    <div class="col-lg-12 alllogintop">
                        {{ Form::open(['url' => 'driver_register', 'class' => '']) }}
                        @if (Auth::user() == null)
                            <div class="col-lg-4">
                                <div class="allloginone">
                                    <h3>{{ trans('messages.user.ride_with') }} {{ $site_name }}</h3>

                                    <a href="{{ url('signup_rider') }}">{{ trans('messages.home.siginup') }} <img
                                            src="images/new/arrow-right.svg" alt="arrow"></a>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="allloginone">
                                    <h3>{{ trans('messages.home.siginup_drive') }}</h3>

                                    <a href="{{ url('signup_driver') }}">{{ trans('messages.home.siginup') }} <img
                                            src="images/new/arrow-right.svg" alt="arrow"></a>
                                </div>
                            </div>
                        @endif
                        @if (Auth::guard('company')->user() == null && Auth::user() == null)
                        @endif
                        @if (Auth::guard('company')->user() == null)
                            <div class="col-lg-4">
                                <div class="allloginone">
                                    <h3>{{ trans('messages.home.siginup_company') }}</h3>

                                    <a href="{{ url('signup_company') }}">{{ trans('messages.home.siginup') }} <img
                                            src="images/new/arrow-right.svg" alt="arrow"></a>
                                </div>
                            </div>
                        @endif

                        {{ Form::close() }}
                    </div>
                @endif
                <div class="col-lg-12 allloginbottom">
                    <div class="col-lg-4">
                        <div class="alllogintwo">
                            <img src="images/new/easyway.svg" alt="icon">
                            <h4>{{ trans('messages.home.easy_way') }}</h4>
                            <p>{{ trans('messages.home.easy_content') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="alllogintwo">
                            <img src="images/new/anywhare.svg" alt="icon">
                            <h4>{{ trans('messages.home.anywhere') }}</h4>
                            <p>{{ trans('messages.home.anywhere_content') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="alllogintwo">
                            <img src="images/new/lowcost.svg" alt="icon">
                            <h4>{{ trans('messages.home.lowcost') }}</h4>
                            <p>{{ trans('messages.home.lowcost_content') }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 allloginbottom1">
                    <a href="{{ url('ride') }}">{{ trans('messages.home.reason') }} <img
                            src="images/new/arrow-right.svg" alt="arrow"></a>
                </div>
            </div>
        </div>

        <div class="cls_sectionone">
            <div class="container">
                <div class="row displayflex">
                    <div class="col-lg-6">
                        <div class="cls_sectiononeimg">
                            <img src="images/new/image3.jpg" alt="banner">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cls_sectiononetxt">
                            <h4 class="text-twotruncate">{{ trans('messages.home.drive_you') }}
                                {{ trans('messages.home.you_need') }}</h4>
                            <p class="text-threetruncate">{{ trans('messages.home.drive_with') }}
                                {{ $site_name }}{{ trans('messages.home.goals') }}</p>
                        </div>
                    </div>
                </div>
                <div class="row cls_sectionbtm displayflex">
                    <div class="col-lg-6">
                        <div class="cls_sectiononetxt">
                            <h4 class="text-twotruncate">{{ trans('messages.home.drive_you1') }}</h4>
                            <p class="text-threetruncate">{{ trans('messages.home.goals1') }}</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cls_sectiononeimg">
                            <img src="images/new/image2.png" alt="banner">
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="cls_arriving">
            <div class="container">
                <div class="title">
                    <h5>{{ trans('messages.home.now_arrive') }}</h5>
                    <h6>{{ trans('messages.home.safe') }}</h6>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="cls_arrivingin">
                            <img src="images/new/arrive2.svg" alt="banner">

                            <h5>{{ trans('messages.home.helping') }}</h5>
                            <p>{{ trans('messages.home.city_with') }} {{ $site_name }}
                                {{ trans('messages.home.city_with_content') }}</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="cls_arrivingin">
                            <img src="images/new/arrive1.svg" alt="banner">

                            <h5>{{ trans('messages.home.safe_ride') }}</h5>
                            <p>{{ trans('messages.home.backseat') }}
                                {{ $site_name }}{{ trans('messages.home.designed') }}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
@stop
