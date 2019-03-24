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
                        <button type="button" class="btn btn-info btn-lg" style="background: #2a3f54;" data-toggle="modal" data-target="">Explore Nepal</button>

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
                                                  action="{{--{{route('explore_action')}}--}}" enctype="multipart/form-data">
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
                                                    <label for="category">Image <span class="required">*</span> </label>
                                                    <div>
                                                        <input type="file" name="image" required  class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group" style="color:#e62b4c;">
                                                    <label for="category">Detail <span class="required">*</span> </label>
                                                    <div>
                                                        <textarea class="form-control" id="details" name="details" ></textarea>
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
                                            </form>
                                            {{--//////--}}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            {{--............................--}}



                            <div class="x_content">
                                <br>
                                @foreach($explore as $data)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="card hovercard">
                                            <div class="cardheader">

                                            </div>
                                            <div class="avatar">
                                                <img src="{{URL::to('backend/images/explore/'.$data->image)}}" alt="" />
                                            </div>
                                            <ul class="list-unstyled user_data">

                                                <li ><b style="float: left;">Detail:</b>{!! str_limit($data->detail,50 )!!}
                                                </li><br>

                                            </ul>

                                            <span style="float: left;margin-left: 80px;">
    <a class="btn btn-primary" title="edit" href="{{route('explore_edit',['id'=>$data->id])}}">
        <i class="fa fa-edit"  ></i>
    </a></span>
                                        </div>
                                        {{--<h3>{{Auth::user()->name}}</h3>--}}
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
