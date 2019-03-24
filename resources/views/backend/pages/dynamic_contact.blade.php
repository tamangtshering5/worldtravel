@extends('backend.pages.master')

@section('body')
    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-2"></div>
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="x_panel">
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
                    <div class="x_title">
                        <button type="button" class="btn btn-info btn-lg" style="background: #2a3f54;" data-toggle="modal" data-target="#myModal">Contact</button>

                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    {{--''''''--}}
                    {{--@foreach($datas as $data)--}}{{--
                        <div class="col-md-4 col-sm-4 col-xs-12 profile_left">
                            <div class="profile_img">
                                <!-- end of image cropping -->
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <div class="avatar-view" title="Change the avatar">
                                        <img src="--}}{{--{{URL::to('backend/images/hotel/'.$data->image)}}--}}{{--" style="height:300px;width:300px;" alt="Avatar">
                                    </div>
                                    <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                </div>

                            </div>
                            <h3>--}}{{--{{Auth::user()->name}}--}}{{--</h3>

                            <ul class="list-unstyled user_data">
                                <li><b>Price:</b>--}}{{--{{$data->price}}--}}{{--
                                </li>
                                <li><b>Package:</b>--}}{{--{{$data->package}}--}}{{--
                                </li>
                                <li><b>Name:</b>--}}{{--{{$data->hotel_name}}--}}{{--
                                </li>
                                <li><b>Address:</b>--}}{{--{{$data->hotel_address}}--}}{{--
                                </li>

                                <li><b>Detail:</b>--}}{{--{!! $data->detail !!}--}}{{--
                                </li>

                            </ul>




                            --}}{{--//////--}}{{--
                            <a href="--}}{{--{{route('hotel_edit',['id'=>$data->id])}}--}}{{--" class="btn btn-success" style="background: #F1931B"><i class="fa fa-edit m-right-xs"></i>Edit</a><br>

                            <form method="post" action="--}}{{--{{route('hotel_del',['id'=>$data->id])}}--}}{{--">
                                {{csrf_field()}}
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash m-right-xs"></i>Delete</button>
                            </form>
                        </div>
                    --}}{{--@endforeach--}}



                    {{--............................--}}



                    <div class="x_content">
                        <br>
                        @foreach($datas as $data)
                            <div class="col-md-8 col-sm-8 col-xs-12" style="margin-left: 110px">
                                <!-- Modal -->

                                {{--''''''--}}
                                {{-- @foreach($datas as $data)--}}

                                <div class="card hovercard" >
                                    <div class="cardheader">

                                    </div>
                                    <ul class="list-unstyled user_data">
                                        <li ><b style="float: left;">Address:</b>{{$data->address}}
                                        </li><br>

                                        <li ><b style="float: left;">Phone:</b>{{$data->phone}}
                                        </li><br>

                                        <li ><b style="float: left;">Email:</b>{{$data->email}}
                                        </li><br>

                                    </ul>

                                    {{--
                                                                                <i class="fa fa-edit" style="font-size:24px"></i>
                                    --}}
                                    {{--
                                                                                <a href="--}}
                                    {{--{{route('hotel_edit',['id'=>$data->id])}}--}}{{--
                                    " style="background: #F1931B"><i class="fa fa-edit m-right-xs"></i>Edit</a><br>
                                    --}}

                                    <span style="float: left;margin-left: 190px;">
    <a class="btn btn-primary" title="edit" href="{{route('contact_edit',['id'=>$data->id])}}">
        <i class="fa fa-edit"  ></i>
    </a></span>
                                    {{--<span style="float: right;margin-left: 20px;"><form method="post" action="{{route('tour_del',['id'=>$data->id])}}">
                                        {{csrf_field()}}
                                        <a class="btn btn-danger">
                                            <i class="fa fa-trash-o" style="font-size:24px" title="delete"></i>
                                        </a>
                                            <input type="submit"></i></input>

                                    </form>
                                    </span>--}}</div>
                                <h3>{{--{{Auth::user()->name}}--}}</h3>
                            </div>
                        @endforeach
                    </div>



                    {{--.....................................--}}
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection
