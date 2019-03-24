@extends('backend.pages.master')
@section('body')

    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-5 col-sm-5 col-xs-5">
                <div class="x_panel">

                    <div class="x_title">
                        {{-- <h2><i class="fa fa-tag"></i>&nbsp; Edit slider image </h2><br>--}}
                        <a  href="{{route('tour_tabs')}}" class="btn btn-info btn-lg" style="background:#2a3f54;">Back</a>
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
                              action="{{route('tourtabedit_action',['id'=>$datas->id])}}" enctype="multipart/form-data">
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
                                    <label for="category">Itenerary <span class="required">*</span> </label>
                                    <div>
                                        <textarea class="form-control" id="itenerary" name="itenerary" >{!! $datas->itenerary !!}</textarea>
                                    </div>
                                </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div>
                                    <input type="submit" class="btn btn-success" value="Add Now" style="background: #F1931B;"></input>
                                </div>
                            </div>
                            <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
                            <script>
                                CKEDITOR.replace( 'itenerary' );
                            </script>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>




@endsection
