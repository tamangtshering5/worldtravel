@extends('frontend.includes.master')
@section('body')
    @include('frontend.includes.search')

    <div class="row booking-page">
        <div class="col-lg-12">
            <div class="booking-header">
                <h3>Book Your Tickets Now</h3>
            </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="form-wrapper">
                <div class="form-group booking-form">
                    <form class="my-form" action="{{route('booking_action')}}" method="post">
                        {{csrf_field()}}
                        @if(count($errors)>0)
                            @foreach($errors->all() as $error )
                                <p class=" alert-success">{{$error}}</p>

                            @endforeach
                        @endif

                        @if(session('success'))
                            <p class="alert alert-success">{{session('success')}}</p>

                        @endif

                        <div class="col-lg-6 form-group">
                            <label for="">First Name: <span class="req">*</span></label>
                            <input class="form-control" type="text" name="first_name" value="{{$first_name}}" required placeholder="Enter Your First name">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Last Name: <span class="req">*</span></label>
                            <input class="form-control" type="text" name="last_name" value="{{$last_name}}" required placeholder="Enter Your Last name">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Email: <span class="req">*</span></label>
                            <input class="form-control" type="email" name="email" value="{{$email}}" required placeholder="Enter Your email">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Phone Number: <span class="req">*</span></label>
                            <input class="form-control" type="text" name="phone" value="{{$phone}}" required placeholder="Enter Your Phone Number">
                        </div>

                        <div class="form-group col-lg-6">
                            <label for="">Country: <span class="req">*</span></label>
                            <input class="form-control" type="text" name="country" value="{{$country}}" required placeholder="Enter Your Country">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Booking Date: <span class="req">*</span></label>
                            <input class="form-control" type="text" name="date" value="{{$booking_date}}" required placeholder="Enter Your Booking Date">
                        </div>

                        <div class="form-group col-lg-6" >
                            <label for="select-from">Select Services:</label>
                            <select class="form-control" id="cata" name="cata">
                                @foreach($catagory as $data)
                                <option value="{{$data->id}}">{{$data->catogary}}</option>
                                    @endforeach
                            </select>
                        </div>


                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

                        <script type="text/javascript">

                            $(document).ready(function(){

                                $(document).on('change','#cata',function(){

                                    var a = $(this).val();

                                    $.ajax({

                                        type:'get',
                                        url: '{{URL::to('cata_find')}}',
                                        data:{'id':a},
                                        success:function(datas){

                                           $("select#subcat").empty();
                                            $.each(datas,function(i,data){

                                                $("select#subcat").append('<option value="'+data.id+'"> '+data.sub_catagory+'</option>');

                                            });
                                        }
                                    });




                                });
                            });

                        </script>

                        <div class="form-group col-lg-6">
                            <label for="select-from">Services Categories:</label>
                            <select class="form-control"  id="subcat" name="sub_cata">
                                <option value="">Choose</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Sector Name:<span class="req">*</span></label>
                            <input class="form-control" type="text" name="sector_name" value="" placeholder="Enter Sector Name">
                        </div>
                        <div class="form-group col-lg-6">
                            <label for="">Number of Person(s): <span class="req">*</span></label>
                            <input class="form-control" type="text" name="people" value="{{$people}}" required placeholder="Enter Number of Person">
                        </div>
                      {{--  <div class="form-group col-lg-6">
                            <label for="select-from">Payment Method:</label>
                            <select class="form-control" >
                                <option value="1">Paypal</option>
                                <option value="2">VISA</option>
                                <option value="3">Others</option>
                            </select>
                        </div>--}}
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-orange">Book</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection