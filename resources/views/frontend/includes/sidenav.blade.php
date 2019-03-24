<div class="sidenav-content">
    <div id="mySidenav" class="sidenav" >
        @foreach($logo as $data)
        <h2 id="web-name"><span><img class="sidenav-img" src="{{URL::to('backend/images/logo/'.$data->image)}}"></span>World Travel</h2>
@endforeach
        <div id="main-menu">
          <div class="closebtn">
                <button class="btn btn-default" id="closebtn">&times;</button>
            </div><!-- end close-btn -->
            <div class="list-group panel">
                <ul class="nav menu ">
                    <li  class="{{Request::path() == '/' ? "active": ''}}"><a href="{{route('index')}}" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Home</a></li>
                    <li class="dropdown"> <a href="#" class="list-group-item dropdown-toggle" data-toggle="dropdown"><span><i class="fa fa-home link-icon"></i></span>About<span><i class="fa fa-angle-down"></i></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('about')}}">Introduction</a></li>
                        <li><a href="{{route('mdmessage')}}">Message from MD</a></li>
                    </ul>
                    </li>
                    <li class="{{Request::path() == 'hotel' ? "active": ''}}"><a href="{{route('hotel')}}" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Hotels</a></li>
                    <li class="{{Request::path() == 'tour' ? "active": ''}}"><a href="{{route('tour')}}" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Tours</a></li>
                    <li class="{{Request::path() == 'trekking' ? "active": ''}}"><a href="{{route('trekking')}}" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Trekking</a></li>
                <li class="{{Request::path() == 'explore' ? "active": ''}}"><a href="{{route('explore')}}" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Explore Nepal</a></li>
                <li class="{{Request::path() == 'ticketing' ? "active": ''}}"><a href="{{route('ticketing')}}" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Ticketing</a></li>
                <li class="{{Request::path() == 'remittance' ? "active": ''}}"><a href="{{route('remittance')}}" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Remittance</a></li>
                <li class="{{Request::path() == 'contact' ? "active": ''}}"><a href="{{route('contact')}}" class="list-group-item"><span><i class="fa fa-home link-icon"></i></span>Contact</a></li>
                </ul>
            </div><!-- end list-group -->
        </div><!-- end main-menu -->
    </div><!-- end mySidenav -->
</div><!-- end sidenav-content -->
