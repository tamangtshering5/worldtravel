@extends('frontend.includes.master')
@section('body')
    @include('frontend.includes.search')

    <!--================== PAGE-COVER ================-->
    <section class="page-cover" id="cover-cruise-detail">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Ticketing</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Ticketing</li>
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
@foreach($ticketing as $data)
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 content-side">

                        <div><img src="{{URL::to('backend/images/ticketing/'.$data->main_image)}}" class="img-responsive" alt="feature-img"/></div>
                        <div class="detail-tabs">
                            <ul class="nav nav-tabs nav-justified">
                                <li class="active"><a href="#cruise-information" data-toggle="tab">International</a></li>
                                <li><a href="#crs-features" data-toggle="tab">Domestic</a></li>
                            </ul>

                            <div class="tab-content">

                                <div id="cruise-information" class="tab-pane in active">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 tab-img">
                                            <img src="{{URL::to('backend/images/ticketing/'.$data->international_image)}}" class="img-responsive" alt="flight-detail-img" />
                                        </div><!-- end columns -->

                                        <div class="col-sm-8 col-md-8 tab-text">

                                            <p>{!! $data->international_detail !!}</p>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                </div><!-- end cruise-information -->

                                <div id="crs-features" class="tab-pane">
                                    <div class="row">
                                        <div class="col-sm-4 col-md-4 tab-img">
                                            <img src="{{URL::to('backend/images/ticketing/'.$data->domestic_image)}}" class="img-responsive" alt="flight-detail-img" />
                                        </div><!-- end columns -->

                                        <div class="col-sm-8 col-md-8 tab-text">
                                            <p>{!! $data->domestic_detail!!}</p>
                                        </div><!-- end columns -->
                                    </div><!-- end row -->
                                </div><!-- end crs-features -->

                            </div><!-- end tab-content -->
                        </div><!-- end detail-tabs -->




                    </div><!-- end columns -->

                    @endforeach

                    <div class="col-xs-12 col-sm-12 col-md-3 side-bar right-side-bar">

                        <div class="side-bar-block booking-form-block">

                            <div class="booking-form">
                                <h3>Book Your Tickets</h3>
                                <p>Book Your TIckets Now</p>

                                <form action="{{route('booking')}}">
                                    @if(count($errors)>0)
                                        @foreach($errors->all() as $error )
                                            <p class=" alert-success">{{$error}}</p>

                                        @endforeach
                                    @endif
                                    @if(session('success'))
                                        <p class="alert alert-success">{{session('success')}}</p>

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
                                        <input type="text" class="form-control" placeholder="Citizenship" name="citizenship"/>
                                    </div>
                                    <label for="">From</label>
                                    <input type="text" class="form-control" placeholder="Place name" name="from" required/>
                                    <label for="">To</label>
                                    <input type="text" class="form-control" placeholder="Place name" name="to" required/>

                                    <div class="checkbox custom-check">
                                        <input type="checkbox" required id="check01" name="checkbox"/>
                                        <label for="check01"><span><i class="fa fa-check"></i></span>By continuing, you are agree to the <a href="#">Terms & Conditions.</a></label>
                                    </div>

                                    <button class="btn btn-block btn-orange" type="submit">Book Now</button>
                                </form>

                            </div><!-- end booking-form -->
                        </div><!-- end side-bar-block -->

                        <div class="row">
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

                        </div><!-- end row -->
                    </div><!-- end columns -->

                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end cruise-detail -->
    </section><!-- end innerpage-wrapper -->

@endsection