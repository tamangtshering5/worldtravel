@extends('frontend.includes.master')
@section('body')

    @include('frontend.includes.search')

<!--======== SEARCH-OVERLAY =========-->
<div class="overlay">
    <a href="javascript:void(0)" id="close-button" class="closebtn">&times;</a>
    <div class="overlay-content">
        <div class="form-center">
            <form>
                <div class="form-group">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..." required />
                        <span class="input-group-btn"><button type="submit" class="btn"><span><i class="fa fa-search"></i></span></button></span>
                    </div><!-- end input-group -->
                </div><!-- end form-group -->
            </form>
        </div><!-- end form-center -->
    </div><!-- end overlay-content -->
</div><!-- end overlay -->

<!--================ PAGE-COVER =============-->
<section class="page-cover" id="cover-about-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="page-title">Message from MD</h1>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li class="active">Message from MD</li>
                </ul>
            </div><!-- end columns -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end page-cover -->


<section class="explore">
    <!-- <div class="container"> -->
    <div class="row">
        @foreach($message as $data)
        <div class="col-lg-4">
            <div class="explore-img">
                <img src="{{URL::to('backend/images/about/md/'.$data->image)}}" alt="MD">
            </div>
        </div>
        @endforeach
            @foreach($message as $data)
        <div class="col-lg-8">
            <div class="explore-text">
                <div class="explore-title">
                    <h2>Message From MD</h2>
                </div>
                <div class="explore-desc2">
                    <p>{!! $data->detail !!}</p>
                </div>

            </div>
        </div>
            @endforeach
    </div>
    <!-- </div> -->
</section>


@endsection