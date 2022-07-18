
@extends('master')
@section('content')


        <!-- Carousel Start -->
        <div class="container-fluid p-0 mb-5">
            <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="w-100" src="https://www.allianz-assistance.co.uk/extended-car-warranty/range-rover-warranty/_jcr_content/root/parsys/stage_copy/stageimage.img.82.3360.jpeg/1590051883640/range-rover.jpeg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div class="p-3" style="max-width: 700px;margin-top:-50% ">
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Wasselny</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">your safe destination</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" style="background-color:#6a1543; border-color:#6a1543 ">Book now</a>
                                {{-- <img src="images/arrow.gif" style="position: absolute;margin-left:29%;height:100%;display:block"> --}}
                      
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="w-100" src="https://media.product.which.co.uk/prod/images/original/gm-6b964763-9fc6-4663-8663-494ea57c6a63-cars-with-happiest-ownersnews-main.jpeg" alt="Image">
                        <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                            <div  class="p-3" style="max-width: 700px;margin-top:-50% " >
                                <h6 class="section-title text-white text-uppercase mb-3 animated slideInDown">Wasselny</h6>
                                <h1 class="display-3 text-white mb-4 animated slideInDown">your safe destination</h1>
                                <a href="" class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft" style="background-color:#6a1543; border-color:#6a1543 ">Book now  </a>
       
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

        <!-- Booking Start -->
                 <div class="section-title">
         <span class="material-symbols-outlined" style="font-variation-settings:'FILL' 0,'wght' 400,'GRAD' 0,'opsz' 48;position: absolute;margin-left:48%;height:100%;display:block;font-size:50px;color:#6a1543">keyboard_double_arrow_down </span> 
         <br><br><br>  <h2>Book</h2>
           <div class="separator"></div>
      </div>
        <div class="container-fluid booking pb-5 wow fadeIn" data-wow-delay="0.1s">

            <div class="container">
                <div class="bg-white shadow" style="padding: 35px;">
                    <div class="row g-2">
                        <div class="col-md-10">
                            <div class="row g-2">
                                <div class="col-md-3">
                                    <div class="date" id="date1" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input"
                                            placeholder="Check in" data-target="#date1" data-toggle="datetimepicker" />
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="date" id="date2" data-target-input="nearest">
                                        <input type="text" class="form-control datetimepicker-input" placeholder="Check out" data-target="#date2" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Adult</option>
                                        <option value="1">Adult 1</option>
                                        <option value="2">Adult 2</option>
                                        <option value="3">Adult 3</option>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-select">
                                        <option selected>Child</option>
                                        <option value="1">Child 1</option>
                                        <option value="2">Child 2</option>
                                        <option value="3">Child 3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button class="btn btn-primary w-100" style="background-color:#ffd322; border-color:#ffd322 ">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Booking End -->
<!--=================================
 welcome -->

<section class="welcome-block objects-car page-section-ptb white-bg">
 <div class="objects-left left"><img class="img-fluid objects-1" src="images/objects/01.jpg" alt=""></div>
 <div class="objects-right right"><img class="img-fluid objects-2" src="images/objects/02.jpg" alt=""></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="section-title">
        
           <h2>Dealeractive</h2>
           <div class="separator"></div>
           <p>Car Dealer is the best premium HTML5 Template. We provide everything you need to build an <strong>Amazing dealership website</strong>  developed especially for car sellers, dealers or auto motor retailers. You can use this template for creating website based on any framework and any language.</p> </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-beetle"></i>
          </div>
          <div class="content">
            <h6>All brands</h6>
            <p>Galley simply dummy text lorem Ipsum is of the printin  k a of type and</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-interface-1"></i>
          </div>
          <div class="content">
            <h6>Free Support</h6>
            <p>Text of the printin lorem ipsum the is simply k a type text and galley of</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-key"></i>
          </div>
          <div class="content">
            <h6>Dealership</h6>
            <p>Printin k a of type and lorem Ipsum is simply dummy text of the galley </p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-6">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-wallet"></i>
          </div>
          <div class="content">
            <h6>affordable</h6>
            <p>The printin k a galley Lorem Ipsum is type and simply dummy text of</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
       <div class="col-md-12">
          <div class="halp-call text-center">
            <img class="img-fluid" src="images/team/01.jpg" alt="">
            <span>Have any question ?</span>
            <h2 class="text-red">(007) 123 456 7890</h2>
          </div>
       </div>
    </div>
  </div>
</section>

<!--=================================
 welcome -->


<!--=================================
 feature-car -->

<section class="feature-car bg-2 bg-overlay-black-70 page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <span class="text-white">Check out our recent cars</span>
         <h2 class="text-white">Feature Car </h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
   <div class="row">
    <div class="col-md-12">
     <div class="owl-carousel owl-theme" data-nav-arrow="true" data-items="4" data-md-items="4" data-sm-items="2" data-xs-items="1" data-space="20">
      <div class="item">
       <div class="car-item text-center">
         <div class="car-image">
           <img class="img-fluid" src="images/car/01.jpg" alt="">
           <div class="car-overlay-banner">
            <ul>
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-list">
           <ul class="list-inline">
             <li><i class="fa fa-registered"></i> 2021</li>
             <li><i class="fa fa-cog"></i> Manual </li>
             <li><i class="fa fa-dashboard"></i> 6,000 mi</li>
           </ul>
        </div>
         <div class="car-content">
          <div class="star">
           <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star-o orange-color"></i>
           </div>
           <a href="#">Acura Rsx</a>
           <div class="separator"></div>
           <div class="price">
             <span class="old-price">$35,568</span>
             <span class="new-price">$32,698 </span>
           </div>
         </div>
       </div>
     </div>
     <div class="item">
       <div class="car-item text-center">
         <div class="car-image">
           <img class="img-fluid" src="images/car/02.jpg" alt="">
           <div class="car-overlay-banner">
            <ul>
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-list">
           <ul class="list-inline">
             <li><i class="fa fa-registered"></i> 2021</li>
             <li><i class="fa fa-cog"></i> Manual </li>
             <li><i class="fa fa-dashboard"></i> 6,000 mi</li>
           </ul>
        </div>
         <div class="car-content">
          <div class="star">
           <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star-o orange-color"></i>
           </div>
           <a href="#">Lexus GS 450h</a>
           <div class="separator"></div>
           <div class="price">
             <span class="old-price">$35,568</span>
             <span class="new-price">$32,698 </span>
           </div>
         </div>
       </div>
     </div>
     <div class="item">
       <div class="car-item text-center">
         <div class="car-image">
           <img class="img-fluid" src="images/car/03.jpg" alt="">
           <div class="car-overlay-banner">
            <ul>
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-list">
           <ul class="list-inline">
             <li><i class="fa fa-registered"></i> 2021</li>
             <li><i class="fa fa-cog"></i> Manual </li>
             <li><i class="fa fa-dashboard"></i> 6,000 mi</li>
           </ul>
        </div>
         <div class="car-content">
          <div class="star">
           <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star-o orange-color"></i>
           </div>
           <a href="#">GTA 5 Lowriders DLC</a>
           <div class="separator"></div>
           <div class="price">
             <span class="old-price">$35,568</span>
             <span class="new-price">$32,698 </span>
           </div>
         </div>
       </div>
     </div>
     <div class="item">
       <div class="car-item text-center">
         <div class="car-image">
           <img class="img-fluid" src="images/car/04.jpg" alt="">
           <div class="car-overlay-banner">
            <ul>
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-list">
           <ul class="list-inline">
             <li><i class="fa fa-registered"></i> 2021</li>
             <li><i class="fa fa-cog"></i> Manual </li>
             <li><i class="fa fa-dashboard"></i> 6,000 mi</li>
           </ul>
        </div>
         <div class="car-content">
          <div class="star">
           <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star-o orange-color"></i>
           </div>
           <a href="#">Toyota avalon hybrid </a>
           <div class="separator"></div>
           <div class="price">
             <span class="old-price">$35,568</span>
             <span class="new-price">$32,698 </span>
           </div>
         </div>
       </div>
      </div>
      <div class="item">
       <div class="car-item text-center">
         <div class="car-image">
           <img class="img-fluid" src="images/car/05.jpg" alt="">
           <div class="car-overlay-banner">
            <ul>
              <li><a href="#"><i class="fa fa-link"></i></a></li>
              <li><a href="#"><i class="fa fa-dashboard"></i></a></li>
             </ul>
           </div>
         </div>
         <div class="car-list">
           <ul class="list-inline">
             <li><i class="fa fa-registered"></i> 2021</li>
             <li><i class="fa fa-cog"></i> Manual </li>
             <li><i class="fa fa-dashboard"></i> 6,000 mi</li>
           </ul>
        </div>
         <div class="car-content">
          <div class="star">
           <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star orange-color"></i>
            <i class="fa fa-star-o orange-color"></i>
           </div>
           <a href="#">Hyundai santa fe sport </a>
           <div class="separator"></div>
           <div class="price">
             <span class="old-price">$35,568</span>
             <span class="new-price">$32,698 </span>
           </div>
         </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
</section>

<!--=================================
 feature-car -->





        <!-- City Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <h1 class="mb-4">From the  <span class="text text-uppercase"style="color:#ffd322;">region,</span></h1>
                        <h1 class="mb-4">to the  <span class="text text-uppercase" style="color:#ffd322;">region.</span></h1>
                        <p class="mb-4">Wasselny operates in most of the city in the Kingdom.</p>
                        <div class="row g-3 pb-4">
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.1s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text mb-2" style="color:#ffd322;"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.3s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-hotel fa-2x text mb-2" style="color:#ffd322;"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Rooms</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 wow fadeIn" data-wow-delay="0.5s">
                                <div class="border rounded p-1">
                                    <div class="border rounded text-center p-4">
                                        <i class="fa fa-users fa-2x text mb-2" style=" color:#ffd322;"></i>
                                        <h2 class="mb-1" data-toggle="counter-up">1234</h2>
                                        <p class="mb-0">Clients</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="btn btn-primary py-3 px-5 mt-2" href="">Explore More</a>
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
        <!-- city End -->


<!--=================================
 play-video -->

 <section class="play-video popup-gallery">
  <div class="play-video-bg bg-3 bg-overlay-black-70">
   <div class="container">
     <div class="row justify-content-center">
       <div class="col-lg-8 col-md-12 text-center">
         <h3 class="text-white">Want to know more about us? Play our promotional video now!</h3>
       </div>
     </div>
    </div>
   </div>
   <div class="container">
     <div class="row justify-content-center">
       <div class="col-lg-10 col-md-12">
         <div class="video-info text-center">
           <img class="img-fluid center-block" src="images/car/24.jpg" alt="">
           <a class="popup-youtube" href="https://www.youtube.com/watch?v=Xd0Ok-MkqoE"> <i class="fa fa-play"></i> </a>
         </div>
       </div>
     </div>
   </div>
 </section>

<!--=================================
 play-video -->


<!--=================================
 Counter -->

<section class="counter counter-style-1 light page-section-ptb">
  <div class="container">
   <div class="row">
     <div class="col-lg-3 col-sm-6 text-center">
       <div class="counter-block">
          <i class="glyph-icon flaticon-beetle"></i>
          <h6 class="text-black">Vehicles In Stock  </h6>
          <b class="timer" data-to="3968" data-speed="10000"></b>
      </div>
     </div>
     <div class="col-lg-3 col-sm-6 text-center">
      <div class="counter-block">
         <i class="glyph-icon flaticon-interface"></i>
          <h6 class="text-black">Dealer Reviews</h6>
          <b class="timer" data-to="5568" data-speed="10000"></b>
       </div>
     </div>
     <div class="col-lg-3 col-sm-6 text-center">
      <div class="counter-block mb-4 mb-sm-0">
          <i class="glyph-icon flaticon-circle"></i>
          <h6 class="text-black">Happy Customer</h6>
          <b class="timer" data-to="8908" data-speed="10000"></b>
       </div>
      </div>
      <div class="col-lg-3 col-sm-6 text-center">
        <div class="counter-block mb-0">
          <i class="glyph-icon flaticon-cup"></i>
          <h6 class="text-black">Awards</h6>
          <b class="timer" data-to="9968" data-speed="10000"></b>
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

<section class="testimonial-1 white-bg page page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-title">
         <span>What Our Happy Clients say about us</span>
         <h2>our Testimonial </h2>
         <div class="separator"></div>
      </div>
      </div>
    </div>
   <div class="row">
    <div class="col-md-12">
     <div class="owl-carousel" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="1" data-space="20">
      <div class="item">
        <div class="testimonial-block text-center">
           <div class="testimonial-image">
             <img class="img-fluid" src="images/testimonial/01.jpg" alt="">
           </div>
           <div class="testimonial-box">
             <div class="testimonial-avtar">
               <img class="img-fluid" src="images/team/01.jpg" alt="">
               <h6>Alice Williams</h6>
               <span>Auto Dealer</span>
             </div>
             <div class="testimonial-content">
                <p>It has survived not only five centuries. lorem Ipsum is simply dummy text of the printin a galley of type and bled it to make a type specimen book.</p>
                <i class="fa fa-quote-right"></i>
             </div>
           </div>
        </div>
      </div>
     <div class="item">
        <div class="testimonial-block text-center">
           <div class="testimonial-image">
             <img class="img-fluid" src="images/testimonial/02.jpg" alt="">
           </div>
           <div class="testimonial-box">
             <div class="testimonial-avtar">
               <img class="img-fluid" src="images/team/02.jpg" alt="">
               <h6>Michael Bean</h6>
               <span>Car Dealer</span>
             </div>
             <div class="testimonial-content">
                <p>A galley of type and bled it to make a type specimen book. Ipsum is simply dummy text of the printin It has survived not only five centuries.</p>
                <i class="fa fa-quote-right"></i>
             </div>
           </div>
        </div>
      </div>
      <div class="item">
        <div class="testimonial-block text-center">
           <div class="testimonial-image">
             <img class="img-fluid" src="images/testimonial/03.jpg" alt="">
           </div>
           <div class="testimonial-box">
             <div class="testimonial-avtar">
               <img class="img-fluid" src="images/team/03.jpg" alt="">
               <h6>Felica Queen</h6>
               <span>Auto Dealer</span>
             </div>
             <div class="testimonial-content">
                <p>Text of the printin a galley of type and bled it to a type specimen book. It has survived not only five centuries make Lorem Ipsum is simply dummy.</p>
                <i class="fa fa-quote-right"></i>
             </div>
           </div>
        </div>
      </div>
      <div class="item">
        <div class="testimonial-block text-center">
           <div class="testimonial-image">
             <img class="img-fluid" src="images/testimonial/04.jpg" alt="">
           </div>
           <div class="testimonial-box">
             <div class="testimonial-avtar">
               <img class="img-fluid" src="images/team/04.jpg" alt="">
               <h6>Sara Lisbon</h6>
               <span>Customer</span>
             </div>
             <div class="testimonial-content">
                <p>Printin a galley of type and bled It has survived not lorem Ipsum is simply dummy text of the  it to make a type specimen book only five centuries.</p>
                <i class="fa fa-quote-right"></i>
             </div>
           </div>
        </div>
      </div>
      </div>
     </div>
    </div>
   </div>
  </section>

 <!--=================================
 testimonial -->


@endsection