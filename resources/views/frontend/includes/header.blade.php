

<div id="top-bar" class="tb-text-white">
    <!-- <div class="container"> -->
    <div class="row">
        <div class="header-links col-xs-12 col-sm-4 col-md-4 col-lg-3">
            <div id="links">
                @foreach($social as $data)
                <ul class="social-links  list-inline list-unstyled">
                    <li><a href="{{$data->facebook}}"><span><i class="fa fa-facebook"></i></span></a></li>
                    <li><a href="{{$data->google}}"><span><i class="fa fa-google-plus"></i></span></a></li>
                    <li><a href="{{$data->instagram}}"><span><i class="fa fa-instagram"></i></span></a></li>
                    <li><a href="{{$data->linkedin}}"><span><i class="fa fa-linkedin"></i></span></a></li>
                    <li><a href="{{$data->twitter}}"><span><i class="fa fa-twitter"></i></span></a></li>
                </ul>
                    @endforeach
            </div><!-- end links -->
        </div><!-- end columns -->
        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-9" >
            @foreach($contact as $data)
            <div id="info" style="float:right">
                <ul class="list-unstyled list-inline">
                    <li><span><i class="fa fa-map-marker"></i></span>{{$data->address}}&nbsp;&nbsp;|&nbsp;&nbsp; <span><i class="fa fa-phone"></i></span>{{$data->phone}}&nbsp;&nbsp;|&nbsp;&nbsp;<span><i class="fa fa-envelope"></i></span>{{$data->email}}</li>
                </ul>
            </div><!-- end info -->
                @endforeach
        </div><!-- end columns -->


    </div><!-- end row -->
    <!-- </div>< end container -->
</div><!-- end top-bar -->

<nav class="navbar navbar-default main-navbar navbar-custom navbar-white" id="mynavbar-1">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" id="menu-button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <div class="header-search hidden-lg">
              <a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a>
            </div> -->
            @foreach($logo as $data)
                <a href="{{route('index')}}" class="navbar-brand"><img src="{{URL::to('backend/images/logo/'.$data->image)}}"></a>
            @endforeach
        </div><!-- end navbar-header -->

        <div class="collapse navbar-collapse" id="myNavbar1">
            <ul class="nav navbar-nav navbar-right navbar-search-link">
                <li  class="{{Request::path() == '/' ? "active": ''}}"><a href="{{route('index')}}">Home</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">About<span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('about')}}">Introduction</a></li>
                        <li><a href="{{route('mdmessage')}}">Message from MD</a></li>

                    </ul>
                </li>
                <li class="{{Request::path() == 'hotel' ? "active": ''}}"><a href="{{route('hotel')}}">Hotel</a></li>
                <li class="{{Request::path() == 'tour' ? "active": ''}}"><a href="{{route('tour')}}">Tour</a></li>
                <li class="{{Request::path() == 'trekking' ? "active": ''}}"><a href="{{route('trekking')}}" >Trekking</a></li>
                <li class="{{Request::path() == 'explore' ? "active": ''}}"><a href="{{route('explore')}}">Explore Nepal</a></li>
                <li class="{{Request::path() == 'ticketing' ? "active": ''}}"><a href="{{route('ticketing')}}">Ticketing</a></li>
                <li class="{{Request::path() == 'remittance' ? "active": ''}}"><a href="{{route('remittance')}}">Remittance</a></li>
                <li class="{{Request::path() == 'contact' ? "active": ''}}"><a href="{{route('contact')}}">Contact</a></li>
                <!-- <li><a href="javascript:void(0)" class="search-button"><span><i class="fa fa-search"></i></span></a></li> -->
            </ul>
        </div><!-- end navbar collapse -->
    </div><!-- end container -->
</nav><!-- end navbar -->

