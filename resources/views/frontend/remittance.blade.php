@extends('frontend.includes.master')
@section('body')
    @include('frontend.includes.search')

    <!--================ PAGE-COVER =============-->
    <section class="page-cover" id="cover-about-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Remittance</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Remittance</li>
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

                    @forelse($remittance as $data)
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4">
                        <div id="abt-cnt-2-img">
                            <img src="{{URL::to('backend/images/remittance/'.$data->image)}}" class="img-responsive" alt="about-img" />
                        </div><!-- end abt-cnt-2-img -->
                    </div><!-- end columns -->

                    <div class="col-xs-12 col-sm-12 col-md-7 col-lg-8">
                        <div id="abt-cnt-2-text">

                            <p>{!! $data->detail !!}</p>
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

                        <div class="row">
                            <div class="col-xs-12 col-sm-12"  id="company-logos">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                                        <h3>We Have Associated Remittance</h3>
                                        <p>You can use all these remittances for payment</p>
                                    </div><!-- end columns -->

                                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                                        <div class="row">
                                            <div class="owl-carousel owl-theme" id="owl-company-logo">
                                                @foreach($remit as $data)
                                                <div class="col-xs-12">
                                                    <div class="item">
                                                        <div class="company-img">
                                                            <img src="{{URL::to('backend/images/remittance/'.$data->image)}}" alt="logo" />
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