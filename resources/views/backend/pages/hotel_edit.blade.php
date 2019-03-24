@extends('backend.pages.master')
@section('body')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-8">
                <div class="x_panel">

                    <div class="x_title">
                        {{-- <h2><i class="fa fa-tag"></i>&nbsp; Edit slider image </h2><br>--}}
                        <a  href="{{route('backend_hotel')}}" class="btn btn-info btn-lg" style="background: #2a3f54;">Back</a>
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
                        <form class="form-horizontal form-label-left" method="post"
                              action="{{route('hoteledit_action',['id'=>$datas->id])}}" enctype="multipart/form-data">
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
                                    <label for="category">Image  </label>
                                    <div>
                                        <input type="file" name="image"  class="form-control">
                                    </div>
                                </div>

                                <div class="form-group col-lg-6" style="color:#e62b4c;">
                                    <label for="category">Add Extra Scroll-Image  </label>
                                    <div>
                                        <input type="file" name="scroll_image[]"   class="form-control" multiple>
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Price  </label>
                                    <div>
                                        <input type="text" name="price" required  class="form-control" value="{{$datas->price}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Package  </label>
                                    <div>
                                        <input type="text" name="package" required  class="form-control" value="{{$datas->package}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Hotel_name  </label>
                                    <div>
                                        <input type="text" name="name" id="hotel_name" required  class="form-control" value="{{$datas->hotel_name}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Slug  </label>
                                    <div>
                                        <input type="text" name="slug" id="slug" required  class="form-control" value="{{$datas->slug}}">
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
                                    <label for="category">Hotel_address  </label>
                                    <div>
                                        <input type="text" name="address" required  class="form-control" value="{{$datas->hotel_address}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Rating  </label>
                                    <div>
                                        <input type="text" name="rating" required  class="form-control" value="{{$datas->rating}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;" >
                                    <label for="select-from">Select Status:</label>

                                    <select class="form-control" id="status" name="status">
                                        <option value="">Select status</option>
                                        <option value="1" @if($datas->status=='1') selected @endif>enable </option>
                                        <option value="0"@if($datas->status=='0') selected @endif >disable </option>

                                    </select>

                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Detail  </label>
                                    <div>
                                        <textarea class="form-control" id="details" name="details" >{!! $datas->detail !!}</textarea>
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Special  </label>
                                    @foreach($datas->HotelTab as $data)
                                    <div>
                                        <textarea class="form-control" id="special" name="special" >{!! $data->special !!}</textarea>
                                    </div>
                                        @endforeach
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
                    </div>
                </div>

            </div>
        </div>
    </div>




@endsection
