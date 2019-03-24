@extends('frontend.includes.master')
@section('body')
    @include('frontend.includes.search')

        <!--================== PAGE-COVER ================-->
        <section class="page-cover" id="cover-cruise-detail">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                    	<h1 class="page-title">Trekking Details</h1>
                        <ul class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li class="active">Trekking</li>
                        </ul>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end page-cover -->


        <!--==== INNERPAGE-WRAPPER =====-->
        <section class="innerpage-wrapper">
        	<div id="cruise-details" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                            <div class="detail-slider">

                                <div class="feature-slider">
                                    @foreach($trekking->TrekkingimgScroll as $data)
                                    <div><img src="{{URL::to('backend/images/trekking_scroll/'.$data->image)}}" class="img-responsive" alt="feature-img" style="height: 500px"/></div>
                                    @endforeach
                                </div><!-- end feature-slider -->


                                <div class="feature-slider-nav">
                                    @foreach($trekking->TrekkingimgScroll as $data)
                                    <div><img src="{{URL::to('backend/images/trekking_scroll/'.$data->image)}}" class="img-responsive" alt="feature-thumb" style="height:100px"/></div>
                                    @endforeach
                                </div><!-- end feature-slider-nav -->

                               {{-- <ul class="list-unstyled features tour-features">
                                	<li><div class="f-icon"><i class="fa fa-wheelchair"></i></div><div class="f-text"><p class="f-heading">Team Members</p><p class="f-data">15</p></div></li>
                                    <li><div class="f-icon"><i class="fa fa-calendar"></i></div><div class="f-text"><p class="f-heading">Duration</p><p class="f-data">7 DAYS</p></div></li>
                                    <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">Discount</p><p class="f-data">10% OFF</p></div></li>
                                </ul>--}}
                            </div><!-- end detail-slider -->

                            <div class="detail-tabs">
                            	<ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#cruise-information" data-toggle="tab">Trekking Overview</a></li>
                                    <li><a href="#cabins" data-toggle="tab">Itenerary</a></li>
                                </ul>

                                <div class="tab-content">

                                    <div id="cruise-information" class="tab-pane in active">
                                    	<div class="row">
                                    		<div class="col-sm-4 col-md-4 tab-img">
                                        		<img src="{{URL::to('backend/images/trekking/'.$trekking->image)}}" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->

                                            <div class="col-sm-8 col-md-8 tab-text">
                                        		{{--<h3>Trekking Information</h3>--}}
                                                <p>{!! $trekking->detail !!}</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end cruise-information -->

                                    <div id="cabins" class="tab-pane">
                                    	<div class="row">

                                            <div class="col-sm-8 col-md-8 tab-text">
                                        		@foreach($trekking->TrekkingTab as $dat)
                                                <p>{!! $dat->itenerary !!}</p>
                                                    @endforeach
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end cabins -->

                                </div><!-- end tab-content -->
                            </div><!-- end detail-tabs -->

                            <div class="available-blocks" id="available-tours">
                            	<h2>Available Tours</h2>
                                @foreach($tour as $data)
                            	<div class="list-block main-block crs-list-block">
                                    <div class="list-content">
                                        <div class="main-img list-img crs-list-img">
                                            <a>
                                                <img src="{{URL::to('backend/images/tour/'.$data->image)}}" class="img-responsive" alt="cruise-img" />
                                            </a>
                                            <div class="main-mask">
                                                <ul class="list-unstyled list-inline offer-price-1">
                                                    <li class="price">{{$data->price}}<span class="divider">|</span><span class="pkg">{{$data->package}}</span></li>
                                                    @for($i=1;$i<=5;$i++)
                                                        @if($data->rating>=$i)
                                                            <span><i class="fa fa-star orange" style="color: #F1931B;"></i></span>
                                                        @endif
                                                    @endfor
                                                </ul>
                                            </div><!-- end main-mask -->
                                        </div><!-- end crs-list-img -->

                                        <div class="list-info crs-list-info">
                                            <h3 class="block-title"><a href="{{route('tour_details')}}">{{$data->place_name}}</a></h3>
                                           {{-- <p class="block-minor">Include Port Taxes</p>--}}
                                            <p>{!! str_limit($data->detail,200) !!}</p>
                                            <a href="{{route('tour_details')}}" class="btn btn-orange btn-lg">View More</a>
                                         </div><!-- end crs-list-info -->
                                    </div><!-- end list-content -->
                                </div><!-- end crs-list-block -->
                                  @endforeach
                            </div><!-- end available-tours -->



                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">

                            <div class="side-bar-block booking-form-block">
                            	<h2 class="selected-price">Book Trekking</h2>

                            	<div class="booking-form">
                                	<h3>Book Trekking</h3>
                                    <p>Find your trek today</p>

                                    <form action="{{route('booking')}}">
                                    	<div class="form-group">
                                    		<input type="text" class="form-control" placeholder="First Name" name="first_name" required/>
                                        </div>

                                        <div class="form-group">
                                    		<input type="text" class="form-control" placeholder="Last Name" name="last_name" required/>
                                        </div>

                                        <div class="form-group">
                                    		<input type="email" class="form-control" placeholder="Email" name="email" required/>
                                        </div>

                                        <div class="form-group">
                                    		<input type="text" class="form-control" placeholder="Phone" name="phone" required/>
                                        </div>

                                        <div class="form-group">
                                    		<input type="text" class="form-control" placeholder="Country" name="country" required/>
                                        </div>

                                        <div class="form-group">
                                    		<input type="text" class="form-control dpd1" placeholder="Booking Date" name="date" required/>                                       		<i class="fa fa-calendar"></i>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-6 col-md-12 col-lg-6 no-sp-r">
                                                <div class="form-group right-icon">
                                                    <select class="form-control" name="people">
                                                        <option value="">People</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="7">7</option>
                                                        <option value="8">8</option>
                                                        <option value="8">9</option>
                                                        <option value="10">10</option>
                                                        <option value="more">More than 10</option>
                                                    </select>
                                                    <i class="fa fa-angle-down"></i>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="checkbox custom-check">
                                        	<input type="checkbox" id="check01" name="checkbox" required/>
                                            <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                        </div>

                                        <button class="btn btn-block btn-orange">Book Now</button>
                                    </form>

                                </div><!-- end booking-form -->
                            </div><!-- end side-bar-block -->

                           {{-- <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="side-bar-block main-block ad-block">
                                        <div class="main-img ad-img">
                                            <a href="#">
                                                <img src="{{URL::to('frontend/images/car-ad.jpg')}}" class="img-responsive" alt="car-ad" />
                                                <div class="ad-mask">
                                                    <div class="ad-text">
                                                        <span>Luxury</span>
                                                        <h2>Car</h2>
                                                        <span>Offer</span>
                                                    </div><!-- end ad-text -->
                                                </div><!-- end columns -->
                                            </a>
                                        </div><!-- end ad-img -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->

                                <div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="side-bar-block support-block">
                                        <h3>Need Help</h3>
                                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum.</p>
                                        <div class="support-contact">
                                            <span><i class="fa fa-phone"></i></span>
                                            <p>+1 123 1234567</p>
                                        </div><!-- end support-contact -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->

                            </div><!-- end row -->--}}
                        </div><!-- end columns -->

                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end cruise-detail -->
        </section><!-- end innerpage-wrapper -->

@endsection