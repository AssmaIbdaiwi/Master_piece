
@extends('master')
@section('content')
{{-- #104f94 --}}
{{-- #6a1543 --}}


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="https://www.allianz-assistance.co.uk/extended-car-warranty/range-rover-warranty/_jcr_content/root/parsys/stage_copy/stageimage.img.82.3360.jpeg/1590051883640/range-rover.jpeg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;margin-top:-120% ">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Wasselny</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">your safe destination</h1>
                             @if(!Auth::check()) 
                               <a href="{{url('login')}}" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" style="background-color:#104f94; border-color:#104f94 ">Book now</a>
                         @else
                      <a href="/cars" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft"
                                                      style="background-color:#104f94; border-color:#104f94 ">Book now</a>@endif
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="https://media.product.which.co.uk/prod/images/original/gm-6b964763-9fc6-4663-8663-494ea57c6a63-cars-with-happiest-ownersnews-main.jpeg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div  class="p-3" style="max-width: 700px;margin-top:-100% " >
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Wasselny</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">your safe destination</h1>
                                <a href="/cars" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" style="background-color:#104f94; border-color:#104f94 ">Book now  </a>
       
                              </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Carousel End -->
       <!-- City Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="mb-4">From the  <span class="text text-uppercase" style="color:#ffd322">region,</span></h1>
                        <h1 class="mb-4">to the  <span class="text text-uppercase" style="color:#ffd322">region.</span></h1>
                        <p class="mb-4">Wasselny operates in most of the city in the Kingdom.</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        {{-- <i class="fa fa-hotel fa-2x text mb-2" style="color:#ffd322"></i> --}}
                                        <iconify-icon icon="bx:trip" width="30" height="30" style="color:#ffd322"></iconify-icon>
                                        <h2 class="mb-1" data-toggle="counter-up">1254</h2>
                                        <p class="mb-0">Trips</p>
                                    </div>
                                </div>
                            </div>
                                                        <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        {{-- <i class="fa fa-hotel fa-2x text mb-2" style="color:#ffd322"></i> --}}
                                        <iconify-icon icon="healthicons:truck-driver" width="30" height="30" style="color:#ffd322"></iconify-icon>
                                        <h2 class="mb-1" data-toggle="counter-up">472</h2>
                                        <p class="mb-0">Drivers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text mb-2" style="color:#ffd322"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">615</h2>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="/about">Explore More</a>
                    </div>
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.1s" src="https://i.ytimg.com/vi/Mpagb5pBics/maxresdefault.jpg" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.3s" src="https://petra.gov.jo/upload/1613231225501.jpg">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-50 wow zoomIn" data-wow-delay="0.5s" src="https://click2jordan.com/wp-content/uploads/2020/07/%D8%A8%D9%84%D8%AF%D8%A9-%D8%A7%D9%85-%D9%82%D9%8A%D8%B3.jpg">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.7s" src="https://royanews.com/wp-content/uploads/2021/07/313965_12_1609067767.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->


        <!-- woman start -->
        <section class="section section-lg section-inset-1 bg-gray-1 pt-lg-0" style="margin-top: 7%;margin-bottom: 3%;">
            <div class="container">
              <div class="row row-50 justify-content-xl-between align-items-lg-center">
                <div class="col-lg-6 wow fadeInLeft">
                  <div class="box-image"><img class="box-image-position" src="https://cdn.motor1.com/images/mgl/EBkx3/s1/young-woman-driving-her-car.jpg" alt="" width="500" height="391"/>
                  </div>
                </div>
                <div class="col-lg-6 col-xl-5 wow fadeInRight">
               <center> 
                 <h1 class="mb-4">For your</span></h1>
                    <h1 class="mb-4">  <span class="text text-uppercase" style="color:#ffd322"> convenience.</span></h1></center>   
                    <p class="mb-4">Wasselny provides  for women, woman driver for just women passengers.</p>
                   <center><a class="btn btn-primary py-3 px-5 mt-2" href="/about">Read More</a></center> 
                </div>
               
              </div>
            </div>
          </section>
<!--  end women -->
 

<!--=================================
 latest news -->

<section class="latest-blog objects-car white-bg page page-section-ptb ">
  <div class="objects-left"><img class="img-fluid objects-1" src="images/objects/03.jpg" alt=""></div>
  {{-- <div class="objects-right"><img class="img-fluid objects-2" src="images/objects/04.jpg" alt=""></div> --}}
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <div class="separator"></div>

      </div>
      <div class="blog-1">
        <div class="row">

          <div class="col-md-6 text-center">
            <div class="custom-block-1">
              <span>Become a </span>
              <h2>partner</h2>
              {{-- <span>with </span> --}}
              <strong class="text-red">Wasselny </strong>

              <span>start earn with us </span>
              <a class="btn btn-sm rounded py-2 px-4" href="{{('partner')}}"
                style="background-color:#ffd322; border-color:#ffd322 ;color:#104f94">Contact us</a>
            </div>
          </div>

          <div class="col-md-6">
            <img class="img-fluid"
              src="https://www.acorninsure.co.uk/wp-content/uploads/2021/04/Fast-Food-Delivery-Driver-resize-1080x675.jpg"
              alt="">
          </div>

        </div>
      </div>
    </div>
</section>

<!--=================================
 latest news -->


<!--=================================
 custom block -->

<section class="bg-7">
  <div class="container-fluid p-0">
    
    <div class="row g-0">
      <div class="col-lg-6 col-md-12">
      </div>
      <div class="col-lg-6 col-md-12 gray-bg text-center">
        <div class="custom-block-1">
          <span>Become a </span>
          <h2>driver</h2>  
           {{-- <span>with </span>  --}}
          <strong class="text-red">Wasselny </strong>
         
          <span>start earn with us </span>
         <a class="btn btn-sm rounded py-2 px-4" href="/driver-register" style="background-color:#ffd322; border-color:#ffd322 ;color:#104f94">Sign up</a>
                   
        </div>
      </div>
    </div>
  </div>
</section>

<!--=================================
 custom block -->




<!--=================================
 Counter -->

<section class="counter counter-style-1 light page-section-ptb">
  <div class="container">
   <div class="row">
     <div class="col-lg-3 col-sm-6 text-center">
       <div class="counter-block">
        
          <i class="glyph-icon flaticon-circle"></i>
          <h6 class="text-black">Users register </h6>
          <b class="timer" data-to="4968" data-speed="10000"></b>
      </div>
     </div>
     <div class="col-lg-3 col-sm-6 text-center">
      <div class="counter-block">
         <i class="glyph-icon flaticon-beetle"></i>
          <h6 class="text-black">Drivers register</h6>
          <b class="timer" data-to="2068" data-speed="10000"></b>
       </div>
     </div>
     <div class="col-lg-3 col-sm-6 text-center">
      <div class="counter-block mb-4 mb-sm-0">
         
          <i class="glyph-icon flaticon-interface"></i>
          <h6 class="text-black">Reviews</h6>
          <b class="timer" data-to="3008" data-speed="10000"></b>
       </div>
      </div>
      <div class="col-lg-3 col-sm-6 text-center">
        <div class="counter-block mb-0">
          <i class="glyph-icon flaticon-cup"></i>
          <h6 class="text-black">Awards</h6>
          <b class="timer" data-to="608" data-speed="10000"></b>
       </div>
     </div>
    </div>
  </div>
</section>

 <!--=================================
 Counter -->

<hr class="gray">
 <!--=================================
 testimonial -->

<section class="testimonial-3 white-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title">
          <span>What Our Happy Clients say about us</span>
          <h2>Our Testimonial </h2>
          <div class="separator"></div>
          <h1></h1>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
     
        <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-space="15">
         @foreach ($review as $reviews)
          <div class="item">
            <div class="testimonial-block">
              
              <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                  <div class="testimonial-avtar">
                    <img class="img-fluid center-block" src="{{asset('upload/'.$reviews->image )}}" alt="">
                  </div>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-9">
                  <div class="testimonial-content">
                    <p><i class="fa fa-quote-left"></i> <span>{{$reviews->msg_feedback}}</span> <i class="fa fa-quote-right float-end"></i></p>
                  </div>
                  <div class="testimonial-info">
                    <h6>{{ $reviews->name }}</h6>
                  </div>
                </div>
              </div>
          
            </div>
          </div>
          @endforeach
        </div>
     
      </div>
    </div>

  </div>
</section>

<!--=================================
 testimonial -->

@endsection