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
                        <a  href="{{route('seo')}}" class="btn btn-info btn-lg" style="background: #2a3f54;">Back</a>

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
                        {{--profile edit form--}}

                        <div class="col-md-8 col-sm-8 col-xs-12 profile_left">

                            <form class="form-horizontal form-label-left" method="post" action="{{route('seoedit_action',['id'=>$datas->id])}}" enctype="multipart/form-data">
                                {{csrf_field()}}



                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Title <span class="required">*</span> </label>
                                    <div>
                                        <input type="text" name="title" required  class="form-control" value="{{$datas->title}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Keywords <span class="required">*</span> </label>
                                    <div>
                                        <input type="text" name="keywords" required  class="form-control" value="{{$datas->keywords}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Description <span class="required">*</span> </label>
                                    <div>
                                        <input type="text" name="description" required  class="form-control" value="{{$datas->description}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Author <span class="required">*</span> </label>
                                    <div>
                                        <input type="text" name="author" required  class="form-control" value="{{$datas->author}}">
                                    </div>
                                </div>


                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div>
                                        <input type="submit" class="btn btn-primary btn-xs" value="Add Now" style="background: #F1931B"></input>
                                    </div>
                                </div>

                            </form>
                            <br><br>

                            {{--end profile edit for,--}}
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
