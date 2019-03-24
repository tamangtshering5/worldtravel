@extends('frontend.includes.master')
@section('body')
    @include('frontend.includes.search')

    <!--=================== PAGE-COVER =================-->
    <section class="page-cover" id="cover-hotel-grid-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Hotels</h1>
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Hotels</li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end page-cover -->



    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="hotel-grid" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                        <div class="row">
                            @foreach($hotel as $data)
                                @if($data->status=='1')
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="grid-block main-block h-grid-block">
                                    <div class="main-img h-grid-img" style="max-height:180px;">
                                        <a href="hotel-details.php">
                                            <img src="{{URL::to('backend/images/hotel/'.$data->image)}}" class="img-responsive" alt="hotel-img" style="height: 350px;" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">{{$data->price}}<span class="divider">|</span><span class="pkg">{{$data->package}}</span></li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end h-grid-img -->

                                    <div class="block-info h-grid-info">
                                        {{--<div class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                        </div><!-- end rating -->--}}

                                        @for($i=1;$i<=5;$i++)
                                            @if($data->rating>=$i)
                                                <span><i class="fa fa-star orange" style="color: #F1931B;"></i></span>
                                            @endif
                                            @endfor

                                        <h3 class="block-title"><a href="{{route('hotel_details')}}">{{$data->hotel_name}}</a></h3>
                                        <p class="block-minor">From: {{$data->hotel_address}}</p>
                                        <p>{!! str_limit($data->detail,100) !!} </p>
                                        <div class="grid-btn">
                                            <a href="{{route('hotel_details',['slug'=>$data->slug])}}" class="btn btn-orange btn-block btn-lg">View More</a>
                                        </div><!-- end grid-btn -->
                                    </div><!-- end h-grid-info -->
                                </div><!-- end h-grid-block -->
                            </div><!-- end columns -->
                                @endif
@endforeach

                        </div><!-- end row -->

                        <div style="margin-left: 50%">
                            {{$hotel->links()}}
                        </div>

                       {{-- <div class="pages">
                            <ol class="pagination">
                                <li><a href="#" aria-label="Previous"><span aria-hidden="true"><i class="fa fa-angle-left"></i></span></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#" aria-label="Next"><span aria-hidden="true"><i class="fa fa-angle-right"></i></span></a></li>
                            </ol>
                        </div><!-- end pages -->--}}
                    </div><!-- end columns -->

                </div><!-- end row -->
            </div>
        </div><!-- end container -->
        </div><!-- end hotel-grid -->
    </section><!-- end innerpage-wrapper -->

    @endsection