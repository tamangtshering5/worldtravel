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
                        <button type="button" class="btn btn-info btn-lg" style="background: #2a3f54;" data-toggle="modal" data-target="#myModal">Click here to add catagory</button>

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

                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Add Items</h4>
                                        </div>
                                        <div class="modal-body">
                                            {{--//////--}}
                                            <form class="form-horizontal form-label-left" method="post"
                                                  action="{{route('cata_action')}}" enctype="multipart/form-data">
                                                @if(count($errors)>0)
                                                    @foreach($errors->all() as $error )
                                                        <p class=" alert-success">{{$error}}</p>

                                                    @endforeach
                                                @endif

                                                @if(session('success'))
                                                    <p class="alert alert-success">{{session('success')}}</p>

                                                @endif
                                                @if(session('alert'))
                                                    <p class="alert alert-success"> {{session('alert')}}   </p>
                                                @endif

                                                {{csrf_field()}}

                                                <div class="form-group" style="color:#e62b4c;">
                                                    <label for="category">Catagory <span class="required">*</span> </label>
                                                    <div>
                                                        <input type="text" name="catagory" required  class="form-control">
                                                    </div>
                                                </div>

                                                    <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div>
                                                        <input type="submit" class="btn btn-primary btn-xs" value="Add Now"></input>
                                                    </div>
                                                </div>

                                            </form>
                                            {{--//////--}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="x_content">
                                <br>
                                @foreach($datas as $data)
                                    <div class="col-lg-4 col-sm-6">
                                        <!-- Modal -->

                                        {{--''''''--}}

                                        <div class="card hovercard">
                                            <div class="cardheader">

                                            </div>
                                            <ul class="list-unstyled user_data">
                                                <li style="float: left"><b>catagory:</b>{{$data->catogary}}
                                                </li><br>

                                            </ul>


                                            <span style="float: right; margin-right: 35px;">
                                            <form method="post" action="{{route('cata_del',['id'=>$data->id])}}">
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-danger" title="delete"><i class="fa fa-trash m-right-xs"></i></button>
                                            </form>
                                                </span>
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








{{--......................section for sub catagory.............................--}}

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
                        <button type="button" class="btn btn-info btn-lg" style="background: #2a3f54;" data-toggle="modal" data-target="#Modal">Click here to add sub-catagory</button>

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

                            <!-- Modal -->
                            <div class="modal fade" id="Modal" role="dialog">
                                <div class="modal-dialog">

                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Add Items</h4>
                                        </div>
                                        <div class="modal-body">
                                            {{--//////--}}
                                            <form class="form-horizontal form-label-left" method="post"
                                                  action="{{route('subcata_action')}}" enctype="multipart/form-data">
                                                @if(count($errors)>0)
                                                    @foreach($errors->all() as $error )
                                                        <p class=" alert-success">{{$error}}</p>

                                                    @endforeach
                                                @endif

                                                @if(session('success'))
                                                    <p class="alert alert-success">{{session('success')}}</p>

                                                @endif
                                                @if(session('alert'))
                                                    <p class="alert alert-success"> {{session('alert')}}   </p>
                                                @endif

                                                {{csrf_field()}}
                                                    <div class="form-group" style="color:#e62b4c;" >
                                                        <label for="select-from">Select Services:</label>

                                                        <select class="form-control" id="cata" name="cata_id">
                                                            @foreach($datas as $data)

                                                            <option value="{{$data->id}}">{{$data->catogary}}</option>
                                                            @endforeach
                                                        </select>

                                                    </div>


                                                    <div class="form-group" style="color:#e62b4c;">
                                                    <label for="category">Sub-Catagory <span class="required">*</span> </label>
                                                    <div>
                                                        <input type="text" name="sub_catagory" required  class="form-control">
                                                    </div>
                                                </div>

                                                <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div>
                                                        <input type="submit" class="btn btn-primary btn-xs" value="Add Now"></input>
                                                    </div>
                                                </div>

                                            </form>
                                            {{--//////--}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="x_content">
                                <br>

                                {{--<div class="form-group col-lg-6" >
                                    <label for="select-from">Select Services:</label>
                                    <select class="form-control" id="cata" name="cata">
                                        @foreach($datas as $data)
                                            <option value="{{$data->id}}">{{$data->catogary}}</option>
                                        @endforeach
                                    </select>
                                </div><br><br><br><br>--}}


                                @foreach($sub_cata as $data)
                                    <div class="col-lg-4 col-sm-6">




                                        <div class="card hovercard">
                                            <div class="cardheader">

                                            </div>



                                            <ul class="list-unstyled user_data">
                                                <li style="float: left"><b>Catagory:</b>{{$data->catogary}}
                                                </li><br>

                                                <li style="float: left"><b>sub-catagory:</b>{{$data->sub_catagory}}
                                                </li><br>

                                            </ul>

                                            <span style="float: right; margin-right: 35px;">
                                            <form method="post" action="{{route('subcata_del',['id'=>$data->id])}}">
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-danger" title="delete"><i class="fa fa-trash m-right-xs"></i></button>
                                            </form>
                                                </span>
                                            </div>

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
