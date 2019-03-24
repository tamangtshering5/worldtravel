@extends('frontend.includes.master')
@section('body')
    @include('frontend.includes.search')

    <!--================ PAGE-COVER =============-->
    <section class="page-cover" id="cover-about-us">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Explore Nepal</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Explore</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->

    <section class="explore">
        <!-- <div class="container"> -->
        <div class="row">
            @foreach($explore as $data)
            <div class="col-lg-4">
                <div class="explore-img">
                    <img src="{{URL::to('backend/images/explore/'.$data->image)}}" alt="">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="explore-text">
                    <div class="explore-desc">
                        <p>{!! $data->detail !!}</p>
                    </div>
                </div>
            </div>
                @endforeach
        </div>
        <!-- </div> -->
    </section>


    @endsection