@extends('frontend.includes.master')
@section('body')

    @include('frontend.includes.search')
    <!--================ PAGE-COVER =============-->
    <section class="page-cover" id="cover-about-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">About Us</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->

    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="about-content-2" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
@foreach($about as $data)
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                        <div id="abt-cnt-2-img">
                            <img src="{{URL::to('backend/images/about/'.$data->image)}}" class="img-responsive" alt="about-img" />
                        </div><!-- end abt-cnt-2-img -->
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                        <div id="abt-cnt-2-text">
                            <h2>Welcome to<span><span><i class="fa fa-plane"></i> World</span>Travels</span></h2>
                            <p>{!! $data->detail !!}</p>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="abt-cnt-2-ftr">
                                        <span><i class="fa fa-diamond"></i></span>
                                        <h4>Best Service</h4>
                                    </div><!-- end abt-cnt-2-ftr -->
                                </div><!-- end columns -->

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="abt-cnt-2-ftr">
                                        <span><i class="fa fa-clock-o"></i></span>
                                        <h4>24/7 Availability</h4>
                                    </div><!-- end abt-cnt-2-ftr -->
                                </div><!-- end columns -->

                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="abt-cnt-2-ftr">
                                        <span><i class="fa fa-star"></i></span>
                                        <h4>5 Star Rating</h4>
                                    </div><!-- end abt-cnt-2-ftr -->
                                </div><!-- end columns -->
                            </div><!-- end row -->
                        </div><!-- end abt-cnt-2-text -->
                    </div><!-- end columns -->
@endforeach
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end about-content-2 -->


        <div id="why-us" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="page-heading innerpage-heading">
                            <h2>Why Choose Us</h2>
                            <hr class="heading-line" />
                        </div><!-- end page-heading -->

                        <div class="row">

                            @foreach($about as $data)
                            <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7" id="why-us-tabs">

                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tb-happy-client" data-toggle="tab"><span><i class="fa fa-smile-o"></i></span>Objectives</a></li>
                                    <li><a href="#tb-satisfaction" data-toggle="tab"><span><i class="fa fa-thumbs-o-up"></i></span>Vision</a></li>
                                    <li><a href="#tb-daily-tours" data-toggle="tab"><span><i class="fa fa-plane"></i></span>Goals</a></li>
                                </ul><!-- end nav-tabs -->

                                <div class="tab-content">

                                    <div id="tb-happy-client" class="tab-pane fade in active">
                                        <p>{!! $data->objectives !!}</p>
                                    </div><!-- end tb-happy-client -->

                                    <div id="tb-satisfaction" class="tab-pane fade">
                                        <p>{!! $data->vision !!}</p>
                                    </div><!-- end tb-satisfaction -->

                                    <div id="tb-daily-tours" class="tab-pane fade">
                                        <p>{!! $data->goals !!}</p>
                                    </div><!-- end b-daily-tours -->

                                </div><!-- end tab-content -->
                            </div><!-- end columns -->

                            @endforeach

                            @foreach($progress as $data)
                            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" id="progress-bars">

                                <div class="bar">
                                    <h4>{{$data->title}}</h4>
                                    <div class="progress">
                                        <div class="progress-bar progress_percent" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:90%"><span>{{$data->percentage}}</span></div>
                                    </div><!-- end progress -->
                                </div><!-- end bar -->

                            </div><!-- end columns -->
                                @endforeach

                            <div class="col-xs-12 col-sm-12"  id="company-logos">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <h3>Our Associates</h3>
                                        <p>We have a support of some great companies</p>
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                        <div class="row">
                                            <div class="owl-carousel owl-theme" id="owl-company-logo">
                                                @foreach($associate as $data)
                                                <div class="col-xs-12">
                                                    <div class="item">
                                                        <div class="company-img">
                                                            <img src="{{URL::to('backend/images/about/associates/'.$data->image)}}" alt="logo" />
                                                        </div><!-- company-img -->
                                                    </div><!-- item -->
                                                </div><!-- end columns -->
                                                @endforeach

                                            </div><!-- owl-company -->
                                        </div><!-- end row -->

                                    </div><!-- end columns -->
                                </div><!-- end row -->
                            </div><!-- end columns -->

                        </div><!-- end row -->
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end why-us -->

    </section><!-- end innerpage-wrapper -->
    @endsection
