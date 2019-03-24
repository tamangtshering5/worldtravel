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
                                                  action="{{route('ticketing_action')}}" enctype="multipart/form-data">
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
                                                    <label for="category">Main_Image <span class="required">*</span> </label>
                                                    <div>
                                                        <input type="file" name="main_image" required  class="form-control">
                                                    </div>
                                                </div>

                                                    <div class="form-group" style="color:#e62b4c;">
                                                        <label for="category">International_Image <span class="required">*</span> </label>
                                                        <div>
                                                            <input type="file" name="international_image" required  class="form-control">
                                                        </div>
                                                    </div>


                                                <div class="form-group" style="color:#e62b4c;">
                                                    <label for="category">International_detail <span class="required">*</span> </label>
                                                    <div>
                                                        <textarea class="form-control" id="int_detail" name="international_detail"></textarea>
                                                    </div>
                                                </div>

                                                    <div class="form-group" style="color:#e62b4c;">
                                                        <label for="category">Domestic_Image <span class="required">*</span> </label>
                                                        <div>
                                                            <input type="file" name="domestic_image" required  class="form-control">
                                                        </div>
                                                    </div>

                                                <div class="form-group" style="color:#e62b4c;">
                                                    <label for="category">Domestic_detail <span class="required">*</span> </label>
                                                    <div>
                                                        <textarea class="form-control" id="domes_detail" name="domestic_detail"></textarea>
                                                    </div>
                                                </div>

                                                    <div class="ln_solid"></div>
                                                <div class="form-group">
                                                    <div>
                                                        <input type="submit" class="btn btn-primary btn-xs" value="Add Now"></input>
                                                    </div>
                                                </div>

                                                <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                                                <script>
                                                    CKEDITOR.replace( 'details' );
                                                </script>

                                                    <script>
                                                        CKEDITOR.replace( 'int_detail' );
                                                    </script>

                                                    <script>
                                                        CKEDITOR.replace( 'domes_detail' );
                                                    </script>
                                            </form>
                                            {{--//////--}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>{{--modal-close--}}


                            <div class="x-content">
                                @foreach($ticketing as $data)
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="profile_img" style="margin-left: 200px">
                                        <!-- end of image cropping -->
                                        <div id="crop-avatar">
                                            <!-- Current avatar -->
                                            <div class="avatar-view" title="Change the avatar">
                                                <img src="{{URL::to('backend/images/ticketing/'.$data->main_image)}}" {{--style="height:500px;width:500px;"--}} alt="Avatar">
                                            </div>
                                            <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>
                                        </div>

                                    </div>

                                    <span style="/*float: left;*/margin-left: 300px;">
    <a class="btn btn-primary" title="edit" href="{{route('ticketing_edit',['id'=>$data->id])}}">
        <i class="fa fa-edit"  ></i>
    </a></span>


                                </div>
                                    @endforeach
                            </div>









                            <div class="x_content">
                                <br>
                                @foreach($ticketing as $data)
                                    <div class="col-lg-6 col-sm-6">
                                        <!-- Modal -->

                                        {{--''''''--}}
                                        {{-- @foreach($datas as $data)--}}

                                        <div class="card hovercard">
                                            <div class="cardheader">

                                            </div>
                                            <div class="avatar">
                                                <img src="{{URL::to('backend/images/ticketing/'.$data->international_image)}}" alt="" />
                                            </div>
                                            <ul class="list-unstyled user_data">

                                                <li ><b style="float: left;">Detail:</b>{!! str_limit($data->international_detail,50 )!!}
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

                                            <span style="margin-left: 25px;">
    <a class="btn btn-primary" title="edit" href="{{route('ticketing_edit',['id'=>$data->id])}}">
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


{{--<div style="margin-right: 10px;">--}}
                                    <div class="col-lg-6 col-sm-6">
                                        <!-- Modal -->

                                        {{--''''''--}}
                                        {{-- @foreach($datas as $data)--}}

                                        <div class="card hovercard">
                                            <div class="cardheader">

                                            </div>
                                            <div class="avatar">
                                                <img src="{{URL::to('backend/images/ticketing/'.$data->domestic_image)}}" alt="" />
                                            </div>
                                            <ul class="list-unstyled user_data">

                                                <li ><b style="float: left;">Detail:</b>{!! str_limit($data->domestic_detail,50 )!!}
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

                                            <span style="margin-left: 25px;">
    <a class="btn btn-primary" title="edit" href="{{route('ticketing_edit',['id'=>$data->id])}}">
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
                        </div>{{--container--}}
                    </div>{{--x-content--}}
                </div>
            </div>
        </div>
    </div>
@endsection
