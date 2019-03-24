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
                        <a  href="{{route('settings')}}" class="btn btn-info btn-lg" style="background: #2a3f54;">Back</a>

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

                            <form class="form-horizontal form-label-left" method="post" action="{{route('settingsedit_action',['id'=>$datas->id])}}" enctype="multipart/form-data">
                                {{csrf_field()}}



                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Facebook <span class="required">*</span> </label>
                                    <div>
                                        <input type="text" name="facebook" required  class="form-control" value="{{$datas->facebook}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Twitter <span class="required">*</span> </label>
                                    <div>
                                        <input type="text" name="twitter" required  class="form-control" value="{{$datas->twitter}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Instagram <span class="required">*</span> </label>
                                    <div>
                                        <input type="text" name="instagram" required  class="form-control" value="{{$datas->instagram}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Linkedin <span class="required">*</span> </label>
                                    <div>
                                        <input type="text" name="linkedin" required  class="form-control" value="{{$datas->linkedin}}">
                                    </div>
                                </div>

                                <div class="form-group" style="color:#e62b4c;">
                                    <label for="category">Google <span class="required">*</span> </label>
                                    <div>
                                        <input type="text" name="google" required  class="form-control" value="{{$datas->google}}">
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
