<!--=============== CRUISE OFFERS ===============-->
<section id="cruise-offers" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="page-heading">
                    <h2>Trekking Offers</h2>
                    <hr class="heading-line" />
                </div><!-- end page-heading -->

                <div class="row">
                    @foreach($trekking as $data)
                    <div class="col-sm-6 col-md-6">
                        <div class="main-block cruise-block">
                            <div class="row">
                                <div class="col-sm-12 col-md-6 col-md-push-6 no-pd-l">
                                    <div class="main-img cruise-img">
                                        <a>
                                            <img src="{{URL::to('backend/images/trekking/'.$data->image)}}" class="img-responsive" alt="trekking-img" style="height:200px;"/>
                                            <div class="cruise-mask">
                                                <p>{{$data->package}}</p>
                                            </div><!-- end cruise-mask -->
                                        </a>
                                    </div><!-- end cruise-img -->
                                </div><!-- end columns -->

                                <div class="col-sm-12 col-md-6 col-md-pull-6 no-pd-r">
                                    <div class=" main-info cruise-info">
                                        <div class="main-title cruise-title">
                                            <a href="{{route('trekking')}}">{{$data->place_name}}</a>
                                            {{--<p>From: Base Camp</p>--}}<br><br><br>
                                            @for($i=1;$i<=5;$i++)
                                                @if($data->rating>=$i)
                                                    <span><i class="fa fa-star orange" style="color: #F1931B;"></i></span>
                                                @endif
                                            @endfor
                                            <br>

                                            <span class="cruise-price">{{$data->price}}</span>
                                        </div><!-- end cruise-title -->
                                    </div><!-- end cruise-info -->
                                </div><!-- end columns -->

                            </div><!-- end row -->
                        </div><!-- end cruise-block -->
                    </div><!-- end columns -->
                        @endforeach

                </div><!-- end row -->

                <div class="view-all text-center">
                    <a href="{{route('trekking')}}" class="btn btn-orange">View All</a>
                </div><!-- end view-all -->
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end cruise-offers -->