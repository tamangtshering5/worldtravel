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
                        <button type="button" class="btn btn-info btn-lg" style="background: #2a3f54;" data-toggle="modal" data-target="Modal">Hotel Scroll Images</button>

                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <br>
                        <div class="container">


                            <div class="x-content">
                                @foreach($datas as $data)
                                    <div class="col-md-4 col-sm-4 col-xs-4">
                                        <div class="profile_img" {{--style="margin-left: 200px"--}}>
                                            <!-- end of image cropping -->
                                            <div id="crop-avatar">
                                                <!-- Current avatar -->
                                                <div class="avatar-view" title="Change the avatar">
                                                    <img src="{{URL::to('backend/images/hotel_scroll/'.$data->image)}}" {{--style="height:500px;width:500px;"--}} alt="Avatar">
                                                </div>
                                                <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                            </div>

                                        </div>

                                        <span style="margin-left: 90px;">
<form method="post" action="{{route('hotelscroll_del',['id'=>$data->id])}}">
                                                {{csrf_field()}}
    <button type="submit" class="btn btn-danger" title="delete"><i class="fa fa-trash m-right-xs"></i></button>
                                            </form>
   </span>


                                    </div>
                                @endforeach

                            </div>
                            {{--.....................................--}}
                        </div>{{--container--}}
                    </div>{{--x-content--}}
                </div>
            </div>
        </div>
    </div>
@endsection
