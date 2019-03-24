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
                        <button type="button" class="btn btn-info btn-lg" style="background: #2a3f54;" data-toggle="modal" data-target="#myModal">Click here to add</button>

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
                                                  action="{{route('slider_action')}}" enctype="multipart/form-data">
                                                @if(count($errors)>0)
                                                    @foreach($errors->all() as $error )
                                                        <p class=" alert-success">{{$error}}</p>

                                                    @endforeach
                                                @endif

                                                    @if(session('success'))
                                                    <p class="alert alert-success">{{session('success')}}</p>

                                                @endif

                                                {{csrf_field()}}
                                                <div class="form-group" style="color:#e62b4c;">
                                                    <label for="category">Image <span class="required">*</span> </label>
                                                    <div>
                                                        <input type="file" name="image" required  class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group" style="color:#e62b4c;">
                                                    <label for="category">Title <span class="required">*</span> </label>
                                                    <div>
                                                        <input type="text" name="title" required  class="form-control">
                                                    </div>
                                                </div>

                                                    <div class="form-group" style="color:#e62b4c;">
                                                        <label for="category">Sub-Title <span class="required">*</span> </label>
                                                        <div>
                                                            <input type="text" name="sub_title" required  class="form-control">
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
                            {{--''''''--}}
                            @foreach($datas as $data)
                                <div class="col-md-4 col-sm-4 col-xs-12 profile_left">
                                    <div class="profile_img">
                                        <!-- end of image cropping -->
                                        <div id="crop-avatar">
                                            <!-- Current avatar -->
                                            <div class="avatar-view" title="Change the avatar">
                                                <img src="{{URL::to('backend/images/slider/'.$data->image)}}" style="height:300px;width:300px;" alt="Avatar">
                                            </div>
                                            <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                        </div>

                                    </div>
                                    <h3>{{--{{Auth::user()->name}}--}}</h3>

                                    <ul class="list-unstyled user_data">
                                        <li><b>Title:</b>{{$data->title}}
                                        </li>

                                        <li><b>Detail:</b>{{$data->sub_title}}
                                        </li>

                                    </ul>




                                    {{--//////--}}
                                    <a href="{{route('slider_edit',['id'=>$data->id])}}" class="btn btn-success" style="background: #F1931B"><i class="fa fa-edit m-right-xs"></i>Edit</a><br>

                                    <form method="post" action="{{route('slider_del',['id'=>$data->id])}}">
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash m-right-xs"></i>Delete</button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
