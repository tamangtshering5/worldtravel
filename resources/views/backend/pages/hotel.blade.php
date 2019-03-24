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
                       {{-- <div class="clearfix"></div>--}}
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
                                                  action="{{route('hotel_action')}}" enctype="multipart/form-data">
                                                @if(count($errors)>0)
                                                    @foreach($errors->all() as $error )
                                                        <p class=" alert-success">{{$error}}</p>

                                                    @endforeach
                                                @endif

                                                @if(session('success'))
                                                    <p class="alert alert-success">{{session('success')}}</p>

                                                @endif

                                                {{csrf_field()}}
                                                <div class="form-group col-lg-6" style="color:#e62b4c;">
                                                    <label for="category">Image <span class="required">*</span> </label>
                                                    <div>
                                                        <input type="file" name="image" required  class="form-control">
                                                    </div>
                                                </div>

                                                    <div class="form-group col-lg-6" style="color:#e62b4c;">
                                                        <label for="category">Scroll-Image <span class="required">*</span> </label>
                                                        <div>
                                                            <input type="file" name="scroll_image[]"  required  class="form-control" multiple>
                                                        </div>
                                                    </div>

                                                    <div class="form-group" style="color:#e62b4c;">
                                                    <label for="category">Price <span class="required">*</span> </label>
                                                    <div>
                                                        <input type="text" name="price" required  class="form-control">
                                                    </div>
                                                </div>

                                                <div class="form-group" style="color:#e62b4c;">
                                                    <label for="category">Package <span class="required">*</span> </label>
                                                    <div>
                                                        <input type="text" name="package" required  class="form-control">
                                                    </div>
                                                </div>

                                                    <div class="form-group" style="color:#e62b4c;">
                                                        <label for="category">Hotel_name <span class="required">*</span> </label>
                                                        <div>
                                                            <input type="text" name="name" id="hotel_name" required  class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group" style="color:#e62b4c;">
                                                        <label for="category">Slug <span class="required">*</span> </label>
                                                        <div>
                                                            <input type="text" name="slug" id="slug" required  class="form-control">
                                                        </div>
                                                    </div>


                                                    <script>
                                                        $(document).ready(function(){

                                                            $("input#hotel_name").keyup(function(){

                                                                var val = $(this).val();
                                                                val = val.replace(/[^\w]+/g,"-");
                                                                $("input#slug").val(val);

                                                            });


                                                        });


                                                    </script>

                                                    <div class="form-group" style="color:#e62b4c;">
                                                        <label for="category">Hotel_address <span class="required">*</span> </label>
                                                        <div>
                                                            <input type="text" name="address" required  class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group" style="color:#e62b4c;">
                                                        <label for="category">Rating <span class="required">*</span> </label>
                                                        <div>
                                                            <input type="text" name="rating" required  class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="form-group" style="color:#e62b4c;">
                                                        <label for="category">Detail <span class="required">*</span> </label>
                                                        <div>
                                                            <textarea class="form-control" id="details" name="details" ></textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group" style="color:#e62b4c;">
                                                        <label for="category">Special <span class="required">*</span> </label>
                                                        <div>
                                                            <textarea class="form-control" id="special" name="special" ></textarea>
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
                                                        CKEDITOR.replace( 'special' );
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
                            {{--''''''--}}
                            @foreach($datas as $data)

                                <div class="col-lg-4 col-sm-6">

                                    <div class="card hovercard">
                                        <div class="cardheader">

                                        </div>
                                        <div class="avatar">
                                            <img src="{{URL::to('backend/images/hotel/'.$data->image)}}" alt="" />
                                        </div><br>
                                        <ul class="list-unstyled user_data">
                                            <li style="float: left"><b>Price:</b>{{$data->price}}
                                            </li><br><br>

                                            <li style="float: left"><b>Package:</b>{{$data->package}}
                                            </li><br><br>

                                            <li style="float: left"><b>Name:</b>{{$data->hotel_name}}
                                            </li><br><br>

                                            <li style="float: left"><b>Address:</b>{{$data->hotel_address}}
                                            </li><br><br>

                                            <li style="float: left"><b>Rating:</b>{{$data->rating}}
                                            </li><br><br>

                                            <li ><b style="float: left;">Detail:</b>{!! str_limit($data->detail,50 )!!}
                                            </li><br>

                                        </ul>


                                        <span style="float: left;margin-left: 35px;">
    <a class="btn btn-primary" title="edit" href="{{route('hotel_edit',['id'=>$data->id])}}">
        <i class="fa fa-edit"  ></i>
    </a></span>
                                        <span style="float: right; margin-right: 35px;">
                                            <form method="post" action="{{route('hotel_del',['id'=>$data->id])}}">
                                                {{csrf_field()}}
                                                <button type="submit" class="btn btn-danger" title="delete"><i class="fa fa-trash m-right-xs"></i></button>
                                            </form>
                                                </span>

                                    </div>

                                </div>

                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
