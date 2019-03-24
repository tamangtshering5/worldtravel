{{--
<section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

    <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
        <div class="container">
            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">
                    <h3 class="footer-heading">CONTACT US</h3>
                    <ul class="list-unstyled">
                      <li><span><i class="fa fa-home link-icon"></i></span><strong>World Travels</strong></li>
                      <li><span><i class="fa fa-map-marker"></i></span>Pashupatimarg,Ratopul-07</li>
                      <li><span><i class="fa fa-map-marker"></i></span>Ratopul, Kathmandu</li>
                      <li><span><i class="fa fa-phone"></i></span>+977-014470235 / +977-9851050427</li>
                      <li><span><i class="fa fa-envelope"></i></span>info@worldtravel.com.np</li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-2 col-lg-2 footer-widget ftr-links">
                    <h3 class="footer-heading">COMPANY</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About</a></li>
                        <li><a href="#">Hotel</a></li>
                        <li><a href="#">Tours</a></li>
                        <li><a href="#">Trekking</a></li>
                        <li><a href="#">Explore Nepal</a></li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-links ftr-pad-left">
                  <h3 class="footer-heading">Our Associates</h3>
                    <ul class="list-unstyled">
                      <li><a href="#">Emrald Consultancy</a></li>
                      <li><a href="#">Save The Earth Foundation</a></li>
                      <li><a href="#">World First Job placement</a></li>
                      <li><a href="#">Emrald Education Foundation</a></li>
                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 footer-widget ftr-about">
                    <h3 class="footer-heading">ABOUT US</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                    <ul class="social-links list-inline list-unstyled">
                      <li><a href="#"><span><i class="fa fa-facebook"></i></span></a></li>
                      <li><a href="#"><span><i class="fa fa-twitter"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-google-plus"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-pinterest-p"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-instagram"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-linkedin"></i></span></a></li>
                        <li><a href="#"><span><i class="fa fa-youtube-play"></i></span></a></li>
                    </ul>
                </div><!-- end columns -->

            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-top -->

    <div id="footer-bottom" class="ftr-bot-black">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                    <p>© 2018 <a href="#">World Travel</a>. All rights reserved.</p>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                    <ul class="list-unstyled list-inline">
                      <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-bottom -->

</section><!-- end footer -->
--}}

<section id="footer" class="ftr-heading-o ftr-heading-mgn-1">

    <div id="footer-top" class="banner-padding ftr-top-grey ftr-text-white">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 footer-header">
                    <h3 class="footer-heading" style="text-align: center">OUR COMPANIES</h3>
                </div>
                <hr>

@foreach($associates as $data)
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">

                    <ul class="list-unstyled">
                        <li><span><i class="fa fa-home link-icon"></i></span><strong>{{$data->name}}</strong></li>
                        <li><span><i class="fa fa-map-marker"></i></span>{{$data->address}}</li>

                        <li><span><i class="fa fa-phone"></i></span>{{$data->phone}}</li>
                        <li><span><i class="fa fa-envelope"></i></span>{{$data->email}}</li>
                        <li><span><i class="fa fa-globe"></i></span><a href="http://worldtravels.com.np/">{{$data->site}}</a></li>
                    </ul>
                </div><!-- end columns -->
@endforeach
                {{--<div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">

                    <ul class="list-unstyled">
                        <li><span><i class="fa fa-home link-icon"></i></span><strong>Save The Earth Foundation</strong></li>
                        <li><span><i class="fa fa-map-marker"></i></span>Banasthali Road </li>
                        <li><span><i class="fa fa-phone"></i></span>+977-014470235</li>

                        <li><span><i class="fa fa-envelope"></i></span> info@stef.com.np</li>
                        <li><span><i class="fa fa-globe"></i></span><a href="http://stef.org.np/">www.stef.org.np</a></li>

                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">

                    <ul class="list-unstyled">
                        <li><span><i class="fa fa-home link-icon"></i></span><strong>World First Job Placement</strong></li>
                        <li><span><i class="fa fa-map-marker"></i></span>Pashupatimarg</li>
                        <li><span><i class="fa fa-phone"></i></span>+977-014470235</li>
                        <li><span><i class="fa fa-envelope"></i></span> info@worldfirstjob.com.np</li>
                        <li><span><i class="fa fa-globe"></i></span><a href="http://worldfirstjob.com.np/">www.worldfirstjob.com.np</a></li>

                    </ul>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 footer-widget ftr-contact">

                    <ul class="list-unstyled">
                        <li><span><i class="fa fa-home link-icon"></i></span><strong>Grafias Technology</strong></li>
                        <li><span><i class="fa fa-map-marker"></i></span>Basundhara</li>
                        <li><span><i class="fa fa-phone"></i></span>+977-9851228277</li>
                        <li><span><i class="fa fa-envelope"></i></span>info@grafiastech.com</li>
                        <li><span><i class="fa fa-globe"></i></span><a href="http://grafiastech.com/">www.grafiastechonology.com</a></li>

                    </ul>
                </div><!-- end columns -->
--}}
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-top -->

    <div id="footer-bottom" class="ftr-bot-black">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="copyright">
                    <p>© 2018 <a href="#">World Travel</a>. All rights reserved.</p>
                </div><!-- end columns -->

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="terms">
                    <ul class="list-unstyled list-inline">
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div><!-- end columns -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end footer-bottom -->

</section><!-- end footer -->
