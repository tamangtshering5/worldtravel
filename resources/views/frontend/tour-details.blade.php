@extends('frontend.includes.master')
@section('body')
    @include('frontend.includes.search')

    <!--================ PAGE-COVER ================-->
    <section class="page-cover" id="cover-tour-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Tour Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Tour Details</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->

    <!--===== INNERPAGE-WRAPPER ====-->
        <section class="innerpage-wrapper">
        	<div id="tour-details" class="innerpage-section-padding">
                <div class="container">
                    <div class="row">

                        <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                            <div class="detail-slider">
                                <div class="feature-slider">

                                    @foreach($slugs->TourimgScroll as $tm)
                                        <div><img src="{{URL::to('backend/images/tour_scroll/'.$tm->image)}}" class="img-responsive" alt="feature-thumb" style="height:500px;"/></div>
                                    @endforeach


                                </div>

                                      <div class="feature-slider-nav">
                                    @foreach($slugs->TourimgScroll as $tm)
                                    <div><img src="{{URL::to('backend/images/tour_scroll/'.$tm->image)}}" class="img-responsive" alt="feature-thumb" style="height:100px;"/></div>
                                   @endforeach

                                </div>

                                {{--<ul class="list-unstyled features tour-features">
                                	<li><div class="f-icon"><i class="fa fa-wheelchair"></i></div><div class="f-text"><p class="f-heading">Seats</p><p class="f-data">25</p></div></li>
                                    <li><div class="f-icon"><i class="fa fa-calendar"></i></div><div class="f-text"><p class="f-heading">Duration</p><p class="f-data">7 DAYS</p></div></li>
                                    <li><div class="f-icon"><i class="fa fa-clock-o"></i></div><div class="f-text"><p class="f-heading">Discount</p><p class="f-data">10% OFF</p></div></li>
                                </ul>--}}
                            </div><!-- end detail-slider -->

                            <div class="detail-tabs">
                               {{-- @foreach($tab as $data)--}}
                            	<ul class="nav nav-tabs nav-justified">
                                    <li class="active"><a href="#tab1" data-toggle="tab">Description </a></li>
                                    <li><a href="#tab2" data-toggle="tab">Itenerary</a></li>

                                </ul>
                               {{-- @endforeach--}}

                                <div class="tab-content">

                                    <div id="tab1" class="tab-pane in active">
                                    	<div class="row">
                                    		<div class="col-sm-4 col-md-4 tab-img">
                                        		<img src="{{URL::to('backend/images/tour/'.$slugs->image)}}" class="img-responsive" alt="flight-detail-img" />
                                            </div><!-- end columns -->

                                            <div class="col-sm-8 col-md-8 tab-text">
                                                <p>{!! $slugs->detail !!}</p>
                                            </div><!-- end columns -->
                                        </div><!-- end row -->
                                    </div><!-- end hotel-overview -->

                                    <div id="tab2" class="tab-pane">
                                    	<div class="row">

                                         @foreach($slugs->TourTab as $tom)
                                            <div class="col-sm-8 col-md-8 tab-text">
                                                <p>{!! $tom->itenerary !!}</p>
                                            </div>
                                            @endforeach

                                        </div><!-- end row -->
                                    </div><!-- end restaurant -->

                                </div><!-- end tab-content -->
                            </div><!-- end detail-tabs -->

                            <div class="available-blocks" id="available-tours">
                            	<h2>Available Tours</h2>
                                @foreach($tour as $data)
                            	<div class="list-block main-block t-list-block">
                                    <div class="list-content">
                                        <div class="main-img list-img t-list-img">
                                            <a>
                                                <img src="{{URL::to('backend/images/tour/'.$data->image)}}" class="img-responsive" alt="tour-img" style="height: 250px"/>
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
                                        </div><!-- end t-list-img -->

                                        <div class="list-info t-list-info">
                                            <h3 class="block-title"><a>{{$data->place_name}}</a></h3>
                                            {{--<p class="block-minor">2 Adults, 02 Kids</p>--}}
                                            <p>{!! str_limit($data->detail,200) !!}</p>
                                            <a href="{{route('tour_details',['slug'=>$data->slug])}}" class="btn btn-orange btn-lg">View More</a>
                                         </div><!-- end t-list-info -->
                                    </div><!-- end list-content -->
                                </div><!-- end t-list-block -->
@endforeach
                            </div><!-- end available-tours -->


                        </div><!-- end columns -->

                        <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">

                            <div class="side-bar-block booking-form-block">
                            	<h2 class="selected-price">Book Tour</h2>

                            	<div class="booking-form">
                                	<h3>Book Tour</h3>
                                    <p>Find your dream tour today</p>

                                    <form  action="{{route('booking')}}">
                                        @if(count($errors)>0)
                                            @foreach($errors->all() as $error )
                                                <p class=" alert-success">{{$error}}</p>

                                            @endforeach
                                        @endif

                                        @if(session('success'))
                                            <p class="alert alert-success">{{session('success')}}</p>

                                        @endif
                                        @if(session('alert'))
                                            <p class="alert alert-success"> {{session('alert')}}   </p>
                                        @endif

                                            {{csrf_field()}}
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
                                    		<input type="text" class="form-control dpd3" placeholder="Booking Date" name="date" required/>
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

                                           {{-- <div class="col-sm-6 col-md-12 col-lg-6 no-sp-l">
                                                <div class="form-group right-icon">
                                                    <select class="form-control" name="children">
                                                        <option value="">Children</option>
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
                                            </div>--}}
                                        </div>

                                        <div class="checkbox custom-check">
                                        	<input type="checkbox" id="check01" name="checkbox" required/>
                                            <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                        </div>

                                        <button class="btn btn-block btn-orange">Book Now</button>
                                    </form>

                                </div><!-- end booking-form -->
                            </div><!-- end side-bar-block -->

                            <div class="row">
                                {{--<div class="col-xs-12 col-sm-6 col-md-12">
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
--}}
                                {{--<div class="col-xs-12 col-sm-6 col-md-12">
                                    <div class="side-bar-block support-block">
                                        <h3>Need Help</h3>
                                        <p>Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum.</p>
                                        <div class="support-contact">
                                            <span><i class="fa fa-phone"></i></span>
                                            <p>+1 123 1234567</p>
                                        </div><!-- end support-contact -->
                                    </div><!-- end side-bar-block -->
                                </div><!-- end columns -->--}}

                            </div><!-- end row -->
                        </div><!-- end columns -->

                    </div><!-- end row -->
            	</div><!-- end container -->
            </div><!-- end tour-details -->
        </section><!-- end innerpage-wrapper -->

@endsection