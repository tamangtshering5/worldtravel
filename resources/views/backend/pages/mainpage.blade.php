@extends('backend.pages.master')
@section('body')
    <!-- start widget -->
        <div class="right_col" role="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="dash-box dash-box-color-1">
                            <div class="dash-box-icon">
                                <i class="glyphicon glyphicon-cloud"></i>
                            </div>
                            <div class="dash-box-body">
                                <span class="dash-box-count">{{count($tour)}}</span>
                                <span class="dash-box-title">Tours Packages</span>
                            </div>

                            <div class="dash-box-action">
                                <button type="button"><a href="{{route('backend_tour')}}">More Info</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dash-box dash-box-color-2">
                            <div class="dash-box-icon">
                                <i class="glyphicon glyphicon-download"></i>
                            </div>
                            <div class="dash-box-body">
                                <span class="dash-box-count">{{count($hotel)}}</span>
                                <span class="dash-box-title">Hotel Packages</span>
                            </div>

                            <div class="dash-box-action">
                                <button type="button"><a href="{{route('backend_hotel')}}">More Info</a></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="dash-box dash-box-color-3">
                            <div class="dash-box-icon">
                                <i class="glyphicon glyphicon-heart"></i>
                            </div>
                            <div class="dash-box-body">
                                <span class="dash-box-count">{{count($trekking)}}</span>
                                <span class="dash-box-title">Trekking Packages</span>
                            </div>

                            <div class="dash-box-action">
                                <button type="button"><a href="{{route('backend_trekking')}}">More Info</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- end widget -->

    @endsection