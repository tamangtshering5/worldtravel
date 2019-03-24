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
                        <button type="button" class="btn btn-info btn-lg" style="background: #2a3f54;" data-toggle="modal" data-target="#myModal">Associates Companies</button>

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


                            <div class="x_content">
                                <br>
                                @foreach($datas as $data)
                                    <div class="col-lg-6 col-sm-6">
                                        <!-- Modal -->

                                        {{--''''''--}}
                                        {{-- @foreach($datas as $data)--}}

                                        <div class="card hovercard">
                                            <div class="cardheader">

                                            </div>
                                            <div class="avatar">
                                                <img src="{{URL::to('backend/images/about/associates/'.$data->image)}}" alt="" />
                                            </div>
                                            <br>

                                            <ul class="list-unstyled user_data">
                                                <li style="float: left"><b>Company Name:</b>{{$data->name}}
                                                </li><br>

                                                <li style="float: left"><b>Company Address:</b>{{$data->address}}
                                                </li><br>

                                                <li style="float: left"><b>Company Phone:</b>{{$data->phone}}
                                                </li><br><br>

                                                <li style="float: left"><b>Company Email:</b>{{$data->email}}
                                                </li><br><br>

                                                <li ><b style="float: left;">Company Site</b>{{$data->site}}
                                                </li><br>

                                            </ul>

                                            <span style="float: left;margin-left: 130px;">
    <a class="btn btn-primary" title="edit" href="{{route('associates_edit',['id'=>$data->id])}}">
        <i class="fa fa-edit"  ></i>
    </a></span>
                                            {{--<span style="float: right; margin-right:75px;">
                                            <form method="post" action="{{route('associate_del',['id'=>$data->id])}}">
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-danger" title="delete"><i class="fa fa-trash m-right-xs"></i></button>
                                            </form>
                                                </span>--}}
                                        </div>
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
