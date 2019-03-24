<section class="flexslider-container" id="flexslider-container-1">

    <div class="flexslider slider" id="slider-1">
        <ul class="slides">
@foreach($slider as $data)
            <li class="item-1" style="background: linear-gradient(rgba(0,0,0,0.3),rgba(0,0,0,0.3)),url({{URL::to('backend/images/slider/'.$data->image)}}) 50% 0%;
background-size:cover;
height:80%;">
              <div class=" meta">
                    <div class="container">
                      <h1>{{$data->title}}</h1>
                      <h2>{{$data->sub_title}}</h2>

                    </div><!-- end container -->
                </div><!-- end meta -->
            </li><!-- end item-1 -->
@endforeach

        </ul>
    </div><!-- end slider -->
</section><!-- end flexslider-container -->
