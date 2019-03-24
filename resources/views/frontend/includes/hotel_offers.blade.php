<section id="hotel-offers" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading">
                    <h2>Hotels Offers</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->

                <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-hotel-offers">
@foreach($hotel as $data)
                    <div class="item">
                        <div class="main-block hotel-block">
                            <div class="main-img">
                                <a>
                                    <img src="{{URL::to('backend/images/hotel/'.$data->image)}}" class="img-responsive" alt="hotel-img"
                                         style="height:200px;"/>
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
                            </div><!-- end offer-img -->

                            <div class="main-info hotel-info">
                                {{--<div class="arrow">
                                    <a href="{{route('hotel_details')}}"><span><i class="fa fa-angle-right"></i></span></a>
                                </div><!-- end arrow -->--}}

                                <div class="main-title hotel-title">
                                    <a>{{$data->hotel_name}}</a>
                                    <p>{{$data->hotel_address}}</p>
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->
@endforeach
                    {{--<div class="item">
                        <div class="main-block hotel-block">
                            <div class="main-img">
                                <a href="hotel-details.php">
                                    <img src="{{URL::to('frontend/images/hyatt.jpg')}}" class="img-responsive" alt="hotel-img" />
                                </a>
                                <div class="main-mask">
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price">rs. 2000<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                        <li class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                        </li>
                                    </ul>
                                </div><!-- end main-mask -->
                            </div><!-- end offer-img -->

                            <div class="main-info hotel-info">
                                <div class="arrow">
                                    <a href="hotel-details.php"><span><i class="fa fa-angle-right"></i></span></a>
                                </div><!-- end arrow -->

                                <div class="main-title hotel-title">
                                    <a href="hotel-details.php">Hyatt Regency</a>
                                    <p>Kathmandu</p>
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="main-block hotel-block">
                            <div class="main-img">
                                <a href="hotel-details.php">
                                    <img src="{{URL::to('frontend/images/gangjong.jpg')}}" class="img-responsive" alt="hotel-img" />
                                </a>
                                <div class="main-mask">
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price">rs.3,000<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                        <li class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                        </li>
                                    </ul>
                                </div><!-- end main-mask -->
                            </div><!-- end offer-img -->

                            <div class="main-info hotel-info">
                                <div class="arrow">
                                    <a href="hotel-details.php"><span><i class="fa fa-angle-right"></i></span></a>
                                </div><!-- end arrow -->

                                <div class="main-title hotel-title">
                                    <a href="hotel-details.php">Gangjong</a>
                                    <p>Lazimpat</p>
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->

                    <div class="item">
                        <div class="main-block hotel-block">
                            <div class="main-img">
                                <a href="hotel-details.php">
                                    <img src="{{URL::to('frontend/images/shangrila.jpg')}}" class="img-responsive" alt="hotel-img" />
                                </a>
                                <div class="main-mask">
                                    <ul class="list-unstyled list-inline offer-price-1">
                                        <li class="price">rs.5000<span class="divider">|</span><span class="pkg">Avg/Night</span></li>
                                        <li class="rating">
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star orange"></i></span>
                                            <span><i class="fa fa-star lightgrey"></i></span>
                                        </li>
                                    </ul>
                                </div><!-- end main-mask -->
                            </div><!-- end offer-img -->

                            <div class="main-info hotel-info">
                                <div class="arrow">
                                    <a href="hotel-details.php"><span><i class="fa fa-angle-right"></i></span></a>
                                </div><!-- end arrow -->

                                <div class="main-title hotel-title">
                                    <a href="hotel-details.php">Shangri La Hotel</a>
                                    <p>RaniBaari</p>
                                </div><!-- end hotel-title -->
                            </div><!-- end hotel-info -->
                        </div><!-- end hotel-block -->
                    </div><!-- end item -->--}}

                </div><!-- end owl-hotel-offers -->

                <div class="view-all text-center">
                    <a href="{{route('hotel')}}" class="btn btn-orange">View All</a>
                </div><!-- end view-all -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end hotel-offers -->