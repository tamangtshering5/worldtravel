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
                    @if(count($errors)>0)
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                    @endif
                    <div class="x_title">
                        <button class="btn btn-info btn-lg" style="background: #2a3f54;" data-toggle="modal" data-target="myModal">Social Links</button>

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
                            {{--''''''--}}
                            @foreach($datas as $data)
                                <div class="col-md-8 col-sm-8 col-xs-12 profile_left">
                                    <h3>{{--{{Auth::user()->name}}--}}</h3>

                                    <ul class="list-unstyled user_data">
                                        <li><b>Facebook:</b>{{$data->facebook}}
                                        </li>

                                        <li><b>Twitter:</b>{{$data->twitter}}
                                        </li>

                                        <li><b>Instagram:</b>{{$data->instagram}}
                                        </li>

                                        <li><b>LinkedIn:</b>{{$data->linkedin}}
                                        </li>

                                        <li><b>Google:</b>{{$data->google}}
                                        </li>

                                    </ul>




                                    {{--//////--}}
                                    <span style="float: left;margin-left: 50%;">
    <a class="btn btn-primary" title="edit" href="{{route('settings_edit',['id'=>$data->id])}}">
        <i class="fa fa-edit"  ></i>
    </a></span>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
