@extends('frontend.includes.master')
@section('body')
    @include('frontend.includes.search')
    <!--==================== PAGE-COVER =================-->
    <section class="page-cover" id="cover-cruise-grid-list">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title">Trekking</h1>
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
        <div id="cruise-grid" class="innerpage-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 content-side">
                        <div class="row">
                            @foreach($trekking as $data)
                                @if($data->status=='1')
                            <div class="col-sm-6 col-md-6 col-lg-3">
                                <div class="grid-block main-block crs-grid-block">
                                    <div class="main-img crs-grid-img">
                                        <a href="trekking-details.php">
                                            <img src="{{URL::to('backend/images/trekking/'.$data->image)}}" class="img-responsive" alt="hotel-img" style="height:200px" />
                                        </a>
                                        <div class="main-mask">
                                            <ul class="list-unstyled list-inline offer-price-1">
                                                <li class="price">{{$data->price}}<span class="divider">|</span><span class="pkg">{{$data->package}}</span></li>
                                            </ul>
                                        </div><!-- end main-mask -->
                                    </div><!-- end crs-grid-img -->

                                    <div class="block-info crs-grid-info">
                                        @for($i=1;$i<=5;$i++)
                                            @if($data->rating>=$i)
                                                <span><i class="fa fa-star orange" style="color: #F1931B;"></i></span>
                                            @endif
                                        @endfor
                                        <h3 class="block-title"><a href="{{route('trekking_details')}}">{{$data->place_name}}</a></h3>
                                        {{--<p class="block-minor">INCLUDE PORT TAXES</p>--}}
                                        <p>{!! str_limit($data->detail,100) !!} </p>
                                        <div class="grid-btn">
                                            <a href="{{route('trekking_details',['slug'=>$data->slug])}}" class="btn btn-orange btn-block btn-lg">View More</a>
                                        </div><!-- end grid-btn -->
                                    </div><!-- end crs-grid-info -->
                                </div><!-- end crs-grid-block -->
                            </div><!-- end columns -->
                                @endif
@endforeach
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end cruise-grid -->
            </div>
        </div>
    </section><!-- end innerpage-wrapper -->

    @endsection