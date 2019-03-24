@extends('frontend.includes.master')
@section('body')
    @include('frontend.includes.search')

    <!--===== INNERPAGE-WRAPPER ====-->
    <section class="innerpage-wrapper">
        <div id="contact-us-2">

            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3531.226912108722!2d85.33139531444499!3d27.741146330613986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1937f79eee39%3A0xd8a7764149f068a1!2sGrafias+Technology+Pvt.+Ltd.!5e0!3m2!1sen!2snp!4v1526556318721" allowfullscreen></iframe>
            </div><!-- end map -->

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
@forelse($contact as $data)
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <div class="contact-block-2">
                                    <span class="border-shape-top"></span>
                                    <span><i class="fa fa-map-marker"></i></span>
                                    <h4>Find us at</h4>
                                    <p>{{$data->address}}</p>
                                    <span class="border-shape-bot"></span>
                                </div><!-- end contact-block-2 -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-4">
                                <div class="contact-block-2">
                                    <span class="border-shape-top"></span>
                                    <span><i class="fa fa-envelope"></i></span>
                                    <h4>Email us at</h4>
                                    <p>{{$data->email}}</p>
                                    <span class="border-shape-bot"></span>
                                </div><!-- end contact-block-2 -->
                            </div><!-- end columns -->

                            <div class="col-xs-12 col-sm-4">
                                <div class="contact-block-2">
                                    <span class="border-shape-top"></span>
                                    <span><i class="fa fa-phone"></i></span>
                                    <h4>Call us at</h4>
                                    <p>{{$data->phone}}</p>
                                    <span class="border-shape-bot"></span>
                                </div><!-- end contact-block-2 -->
                            </div><!-- end columns -->
                        </div><!-- end row -->
@endforeach
                        <div id="contact-form-2" class="innerpage-section-padding">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-lg-10 col-lg-offset-1">
                                    <div class="page-heading">
                                        <h2>Contact Us</h2>
                                        <hr class="heading-line" />
                                    </div>

                                    <div class="row">
                                        {{--<div class="col-xs-12 col-sm-6 contact-form-2-text">
                                            <p><strong>Important:</strong> Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Veniam delectus ei vis est atqui timeam mnesarchum at.</p>
                                            <ul class="social-links list-inline list-unstyled">
                                                <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                                <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                                            </ul>

                                        </div>--}}

                                        <div style="padding: 0 200px;" class="">

                                            <form method="post" action="{{route('contact_action')}}">
                                                @if(session('alert'))
                                                    <p class="alert alert-success"> {{session('alert')}}   </p>
                                                @endif
                                                @if(session('success'))
                                                    <p class="alert alert-success">{{session('success')}}</p>

                                                @endif
                                                @if(count($errors)>0)
                                                    @foreach($errors->all() as $error)
                                                        <p class="alert alert-danger">{{$error}}</p>
                                                    @endforeach
                                                @endif
                                                {{csrf_field()}}
                                                <div class="row">
                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Name" name="name" required/>
                                                        </div>
                                                    </div>

                                                    <div class="col-xs-12 col-sm-6">
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" placeholder="Email" name="email" required/>
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Subject" name="subject" required/>
                                                </div>

                                                <div class="form-group">
                                                    <textarea class="form-control" rows="4" placeholder="Your Message" name="message"></textarea>
                                                </div>

                                                <div class="text-center">
                                                    <button class="btn btn-orange">Send</button>
                                                </div>
                                            </form>

                                        </div>


                                </div>
                                    <div style="padding-left: 355px" class="contact-form-2-text">
                                        {{--
                                                                                        <p><strong>Important:</strong> Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper Lorem ipsum dolor sit amet, ad duo fugit aeque fabulas, in lucilius prodesset pri. Veniam delectus ei vis. Est atqui timeam mnesarchum at, pro an eros perpetua ullamcorper. Veniam delectus ei vis est atqui timeam mnesarchum at.</p>
                                        --}}
                                        <ul class="social-links list-inline list-unstyled">
                                            <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                                            <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                                            <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                                            <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                                            <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                                        </ul>

                                    </div>

                                </div>
                        </div>
                    </div><!-- end columns -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end contact-us -->
    </section><!-- end innerpage-wrapper -->


    <!--========================= NEWSLETTER-1 ==========================-->
    <section id="newsletter-1" class="section-padding back-size newsletter">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                    <h2>Subscribe Our Newsletter</h2>
                    <p>Subscibe to receive our interesting updates</p>
                    <form>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="email" class="form-control input-lg" placeholder="Enter your email address" required/>
                                <span class="input-group-btn"><button class="btn btn-lg"><i class="fa fa-envelope"></i></button></span>
                            </div>
                        </div>
                    </form>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section><!-- end newsletter-1 -->



@endsection