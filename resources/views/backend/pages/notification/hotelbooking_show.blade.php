@extends('backend.pages.master')

@section('body')




    <div class="right_col" role="main">
        <div class="row">
            <div class="col-md-2 "></div>
            <div class=" col-lg-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Customer Messages <small>recent</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="dashboard-widget-content">

                            <ul class="list-unstyled timeline widget">

                                <li>
                                    <div class="btn-group pull-left">
                                        <a href="{{route('hotelbooking-message')}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-danger">Back</button>&nbsp;</a>
                                    </div>


                                    <div class="btn-group pull-right">

                                        <form action="{{route('hotelbooking-delete',['id'=>$datas->id])}}" method="post">
                                            {{ csrf_field() }}

                                            <button class="btn btn-md btn-danger pull-right"><span class="glyphicon glyphicon-trash"></span></button>
                                            {{--<a class="btn btn-md btn-danger pull-right" title='delete message'><i class='fa fa-trash'></i>--}}
                                        </form>


                                    </div>
                                    <div class="clearfix"></div>
                                    <br>

                                    @include('backend.include.message')

                                    <br><div class="block_content">

                                        <div class="byline">
                                            <span>{{ \Carbon\Carbon::parse($datas->created_at)->format('l j F Y')}}</span>   &nbsp;
                                        </div>
                                        <br>
                                        <h2 class="title">
                                            <b><a style="color:black">Name</a></b> : {{$datas->first_name}}<br><br>

                                            <b><a style="color:black">Email </a></b>:&nbsp; {{$datas->email}}<br><br>

                                            <b><a style="color:black">Phone </a></b>:&nbsp;&nbsp;{{$datas->phone}} <br><br>

                                            <b><a style="color:black">Booking Date </a></b>:&nbsp;&nbsp;{{$datas->booking_date}} <br><br>

                                            <b><a style="color:black">Adults </a></b>:&nbsp;&nbsp;{{$datas->adults}} <br><br>

                                            <b><a style="color:black">Children </a></b>:&nbsp;&nbsp;{{$datas->children}} <br><br>
                                        </h2>



                                        <br>




                                    </div>
                            </ul>
                        </div>
                        </li>

                        </ul>

                    </div>
                </div>
            </div>
        </div>
    </div>











@endsection