@extends('backend.pages.master')
@section('body')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-7 col-sm-7 col-xs-7">
                <div class="x_panel">

                    <div class="x_title">
                        {{-- <h2><i class="fa fa-tag"></i>&nbsp; Edit slider image </h2><br>--}}
                        <a  href="{{route('associates_company')}}" class="btn btn-info btn-lg" style="background: #2a3f54;">Back</a>
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
                              action="{{route('associatesedit_action',['id'=>$datas->id])}}" enctype="multipart/form-data">
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
                                    <input type="file" name="image"  class="form-control" value="{{$datas->image}}">
                                </div>
                                <div class="jumbotron jumbotron-fluid">
                                    <div class="container">
                                        <img src="{{URL::to('backend/images/about/associates/'.$datas->image)}}" style="height:200px">
                                    </div>
                                </div>

                            </div>

                            <div class="form-group" style="color:#e62b4c;">
                                <label for="category">Company Name <span class="required">*</span> </label>
                                <div>
                                    <input type="text" name="name" value="{{$datas->name}}">
                                </div>
                            </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Company Address <span class="required">*</span> </label>
                                    <div>
                                        <input type="text" name="address" value="{{$datas->address}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Company Phone <span class="required">*</span> </label>
                                    <div>
                                        <input type="text" name="phone" value="{{$datas->phone}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Company Email <span class="required">*</span> </label>
                                    <div>
                                        <input type="text" name="email" value="{{$datas->email}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Company Site <span class="required">*</span> </label>
                                    <div>
                                        <input type="text" name="site" value="{{$datas->site}}">
                                    </div>
                                </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div>
                                    <input type="submit" class="btn btn-success" value="Add Now" style="background: #F1931B;"></input>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>




@endsection
