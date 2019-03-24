<!--=============== TOUR OFFERS ===============-->
<section id="tour-offers" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading">
                    <h2>Tour Offers</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->

                <div class="owl-carousel owl-theme owl-custom-arrow" id="owl-tour-offers">
@foreach($tour as $data)
                        <div class="item"  >
                        <div class="main-block tour-block">
                            <div class="main-img" >
                                <a href="#">
                                    <img src="{{URL::to('backend/images/tour/'.$data->image)}}" class="img-responsive" alt="tour-img" style="height:300px;"/>
                                </a>
                            </div><!-- end offer-img -->

                            <div class="offer-price-2">
                                <ul class="list-unstyled">
                                    <li class="price">{{$data->price}}<a href="#" ><span class="arrow"><i class="fa fa-angle-right"></i></span></a></li>
                                </ul>
                            </div><!-- end offer-price-2 -->

                            <div class="main-info tour-info">
                                <div class="main-title tour-title">
                                    <a>{{$data->place_name}}</a>
                                    {{--<p>Lumbini, Nepal</p>--}}
                                    @for($i=1;$i<=5;$i++)
                                        @if($data->rating>=$i)
                                            <span><i class="fa fa-star orange" style="color: #F1931B;"></i></span>
                                        @endif
                                    @endfor
                                </div><!-- end tour-title -->
                            </div><!-- end tour-info -->
                        </div><!-- end tour-block -->
                    </div><!-- end item -->
@endforeach

                </div><!-- end owl-tour-offeRs -->

                <div class="view-all text-center">
                    <a href="{{route('tour')}}" class="btn btn-orange">View All</a>
                </div><!-- end view-all -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end tour-offers -->