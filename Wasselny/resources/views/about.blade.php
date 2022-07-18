
@extends('master')
@section('content')



<div class="menu">
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container">
      <div class="row">
       <div class="col-md-12 position-relative">
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>
                <a href="index.html"><img id="logo_img" src="images/logo-light.png" alt="logo"> </a>
            </li>
        </ul>
        <!-- menu links -->
        <ul class="menu-links">
            <!-- active class -->
            <li><a href="javascript:void(0)"> Home <i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel">
                    <li><a href="index.html">Home 1</a></li>
                    <li><a href="index-2.html">Home 2</a></li>
                    <li><a href="index-3.html">Home 3</a></li>
                    <li><a href="index-4.html">Home 4</a></li>
                    <li><a href="index-5.html">Home 5</a></li>
                    <li><a href="index-6.html">Home 6</a></li>
                    <li><a href="index-7.html">Home 7</a></li>
                    <li><a href="index-8.html">Home 8</a></li>
                    <li><a href="index-9.html">Home 9</a></li>
                    <li><a href="index-10.html">Home 10</a></li>
                    <li><a href="index-car-service.html">Car service </a></li>
                    <li><a href="index-car-directory.html"> Car directory</a></li>
                    <li><a href="index-car-listing.html">Car listing </a></li>
                    <li><a href="index-landing-page.html">landing page</a></li>
                </ul>
            </li>
            <li class="active"><a href="javascript:void(0)">Pages <i class="fa fa-angle-down fa-indicator"></i></a>
                <!-- drop down full width -->
                <div class="drop-down menu-bg grid-col-12">
                    <!--grid row-->
                    <div class="grid-row">
                        <!--grid column 3-->
                        <div class="grid-col-3">
                            <ul>
                              <li class="active"><a href="about-01.html">About 01</a></li>
                              <li><a href="about-02.html">About 02</a></li>
                              <li><a href="service-01.html">service 01</a></li>
                              <li><a href="service-02.html">service 02</a></li>
                              <li><a href="career.html">career</a></li>
                            </ul>
                        </div>
                        <!--grid column 3-->
                        <div class="grid-col-3">
                            <ul>
                              <li><a href="team-01.html">team 01</a></li>
                              <li><a href="team-02.html">team 02</a></li>
                              <li><a href="contact-01.html">contact 01</a></li>
                              <li><a href="contact-02.html">contact 02</a></li>
                              <li><a href="faq.html">faq</a></li>
                            </ul>
                        </div>
                        <!--grid column 3-->
                        <div class="grid-col-3">
                            <ul>
                              <li><a href="login.html">login</a></li>
                              <li><a href="register.html">register</a></li>
                              <li><a href="error-404.html">error 404</a></li>
                              <li><a href="coming-soon.html">coming soon</a></li>
                              <li><a href="typography.html">typography</a></li>
                            </ul>
                        </div>
                        <!--grid column 3-->
                        <div class="grid-col-3">
                            <ul>
                              <li><a href="page-left-sidebar.html">page left sidebar </a></li>
                              <li><a href="page-right-sidebar.html">page right sidebar </a></li>
                              <li><a href="page-both-sidebar.html">page both sidebar </a></li>
                              <li><a href="terms-and-conditions.html">terms and conditions </a></li>
                              <li><a href="privacy-policy.html">privacy policy </a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </li>
            <li><a href="javascript:void(0)">blog <i class="fa fa-angle-down fa-indicator"></i></a>
                <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel">
                    <li><a href="javascript:void(0)">blog classic <i class="fa fa-angle-right fa-indicator"></i> </a>
                        <!-- drop down second level -->
                        <ul class="drop-down-multilevel">
                           <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                           <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                           <li><a href="blog-fullwidth.html">fullwidth</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">Masonry  <i class="fa fa-angle-right fa-indicator"></i> </a>
                      <!-- drop down second level -->
                        <ul class="drop-down-multilevel">
                            <li><a href="blog-masonry-2-collums.html"> 2 column </a> </li>
                            <li><a href="blog-masonry-3-collums.html"> 3 column </a> </li>
                            <li><a href="blog-masonry-4-collums.html"> 4 column </a> </li>
                            <li><a href="blog-masonry-left-sidebar.html">left sidebar</a></li>
                           <li><a href="blog-masonry-right-sidebar.html">right sidebar</a></li>
                        </ul>
                    </li>
                    <li><a href="javascript:void(0)">blog single <i class="fa fa-angle-right fa-indicator"></i> </a>
                      <!-- drop down second level -->
                        <ul class="drop-down-multilevel">
                            <li><a href="blog-single-01.html">blog single 01 </a> </li>
                            <li><a href="blog-single-02.html">blog single 02 </a> </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">Car listing  <i class="fa fa-angle-down fa-indicator"></i></a>
               <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel">
                    <li><a href="listing-01.html">listing 01</a></li>
                    <li><a href="listing-02.html">listing 02</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)">Car details  <i class="fa fa-angle-down fa-indicator"></i></a>
               <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel">
                    <li><a href="details-01.html">details 01</a></li>
                    <li><a href="details-02.html">details 02</a></li>
                </ul>
            </li>
            <li><a href="javascript:void(0)"> Contact <i class="fa fa-angle-down fa-indicator"></i></a>
                 <!-- drop down multilevel  -->
                <ul class="drop-down-multilevel right-menu">
                   <li><a href="contact-01.html">contact 01</a></li>
                   <li><a href="contact-02.html">contact 02</a></li>
                </ul>
            </li>
           <li>
              <div class="search-top"> <a class="search-btn not_click d-none d-lg-block" href="javascript:void(0);">Search Button</a>
                <div class="search-box not-click">
                  <div class="row">
                    <div class="col-xl-2 col-md-4 col-sm-6">
                     <div class="selected-box">
                      <select class="selectpicker">
                      <option>Make </option>
                      <option>BMW</option>
                      <option>Honda </option>
                      <option>Hyundai </option>
                      <option>Nissan </option>
                      <option>Mercedes Benz </option>
                     </select>
                    </div>
                     </div>
                     <div class="col-xl-2 col-md-4 col-sm-6">
                      <div class="selected-box">
                         <select class="selectpicker">
                          <option>Model</option>
                          <option>3-Series</option>
                          <option>Carrera</option>
                          <option>GT-R</option>
                          <option>Cayenne</option>
                          <option>Mazda6</option>
                          <option>Macan</option>
                         </select>
                       </div>
                      </div>
                      <div class="col-xl-2 col-md-4 col-sm-6">
                       <div class="selected-box">
                       <select class="selectpicker">
                        <option>Year</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                       </select>
                      </div>
                        </div>
                       <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="selected-box">
                         <select class="selectpicker">
                            <option>Body style</option>
                            <option>2dr Car</option>
                            <option>4dr Car</option>
                            <option>Convertible</option>
                            <option>Sedan</option>
                            <option>Sports Utility</option>
                           </select>
                          </div>
                        </div>
                       <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="selected-box">
                         <select class="selectpicker">
                            <option>Vehicle Status</option>
                            <option>Condition</option>
                            <option>All Conditions</option>
                            <option>Condition</option>
                            <option>Brand New</option>
                            <option>Slightly Used</option>
                            <option>Used</option>
                           </select>
                         </div>
                        </div>
                       <div class="col-xl-2 col-md-4 col-sm-6">
                        <div class="text-center">
                          <button class="button red" type="button">Search</button>
                      </div>
                    </div>
                  </div>
                 </div>
               </div>
              </li>
        </ul>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>

<!--=================================
 header -->


<!--=================================
 inner-intro -->

 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-start d-inline-block">
             <h1 class="text-white">About us </h1>
           </div>
           <div class="col-md-6 text-md-end float-end">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>about us 01</span> </li>
             </ul>
        </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 welcome -->

<section class="welcome-4 page-section-ptb white-bg">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
         <div class="section-title">
           <span>Welcome to </span>
           <h2>the Cardealer online</h2>
           <div class="separator"></div>
           <p>Car Dealer is the best premium HTML5 Template. We provide everything you need to build an <strong>Amazing dealership website</strong>  developed especially for car sellers, dealers or auto motor retailers. You can use this template for creating website based on any framework language.</p>
         </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="owl-carousel owl-theme" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-space="0">
         <div class="item">
           <img class="img-fluid" src="images/car/15.jpg" alt="">
          </div>
          <div class="item">
           <img class="img-fluid" src="images/car/16.jpg" alt="">
          </div>
          <div class="item">
           <img class="img-fluid" src="images/car/17.jpg" alt="">
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <p>Dealer obcaecati adipisci vero lorem ipsum dolor sit amet, consectetur adipisicing elit. dolorum pariatur aut consectetur. Sit quisquam rerum corporis neque atque inventore nulla, quibusdam, ipsa suscipit aperiam reiciendis, ea odio?</p>
        <br />
        <p>Adipisicing ipsum dolor sit amet, consectetur elit. Obcaecati adipisci vero dolorum pariatur aut consectetur. Sit quisquam rerum corporis neque atque inventore nulla, quibusdam, ipsa suscipit aperiam reiciendis, ea odio?</p>
        <p>Obcaecati adipisci vero dolorum pariatur aut consectetur. lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit quisquam rerum corporis neque atque inventore nulla, quibusdam, ipsa suscipit aperiam reiciendis, ea odio?</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="feature-box-3">
          <div class="icon">
            <i class="glyph-icon flaticon-beetle"></i>
          </div>
          <div class="content">
            <h6>All brands </h6>
            <p class="mb-0">Obcaecati adipisci vero dolorum pariatur </p>
          </div>
         </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="feature-box-3">
          <div class="icon">
            <i class="glyph-icon flaticon-interface-1"></i>
          </div>
          <div class="content">
            <h6>Free Support</h6>
            <p class="mb-0">lorem ipsum dolor sit amet, consectetur</p>
          </div>
         </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="feature-box-3">
          <div class="icon">
            <i class="glyph-icon flaticon-key"></i>
          </div>
          <div class="content">
            <h6>Dealership </h6>
            <p class="mb-0">Sit quisquam rerum corporis neque</p>
          </div>
         </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="feature-box-3">
          <div class="icon">
            <i class="glyph-icon flaticon-wallet"></i>
          </div>
          <div class="content">
            <h6>affordable</h6>
            <p class="mb-0">Suscipit aperiam reiciendis, ea odio?</p>
          </div>
         </div>
      </div>
    </div>
  </div>
</section>

<!--=================================
 welcome -->

<hr class="gray" />

<!--=================================
our History -->

<section class="our-history white-bg page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <span>Car dealer's 30 year timeline from the beginning</span>
         <h2>our history</h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
   <div class="row">
    <div class="col-md-12">
       <ul class="timeline list-style-none">
        <li>
          <div class="timeline-badge"><h4>01</h4></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h5>the beginning</h5>
            </div>
            <div class="timeline-body">
              <p>From the beginning lorem ipsum dolor sit amet, consectetur sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
        </li>
        <li class="timeline-inverted">
          <div class="timeline-badge"><h4>02</h4></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h5>New Service Garage</h5>
            </div>
            <div class="timeline-body">
              <p>We own our own New Service Garage incididunt Lorem ipsum dolor sit amet consectetur adipiscing elit.</p>
            </div>
          </div>
        </li>
        <li>
          <div class="timeline-badge"><h4>03</h4></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h5>New Main office</h5>
            </div>
            <div class="timeline-body">
              <p>With new super cool office elit lorem ipsum dolor sit amet sed do eiusmod tempor incididunt ut labore.</p>
            </div>
          </div>
        </li>

        <li class="timeline-inverted">
          <div class="timeline-badge"><h4>04</h4></div>
          <div class="timeline-panel">
            <div class="timeline-heading">
              <h5>New Website launch</h5>
            </div>
            <div class="timeline-body">
              <p>Start online business tempor lorem ipsum dolor sit amet, consectetur adipiscing elit incididunt ut labore.</p>
            </div>
          </div>
        </li>
     </ul>
    </div>
   </div>
  </div>
</section>

<!--=================================
our History-->


<!--=================================
Counter -->

<section class="counter counter-style-2 bg-red bg-1 bg-overlay-black-70 page-section-ptb">
  <div class="container">
    <div class="row">
     <div class="col-lg-3 col-sm-6 item">
     <div class="counter-block text-start mb-lg-0 mb-4">
        <div class="separator"></div>
        <div class="info">
           <h6 class="text-white">Vehicles in Stock</h6>
           <i class="glyph-icon flaticon-beetle"></i>
           <b class="timer text-white" data-to="561" data-speed="10000"></b>
         </div>
        </div>
     </div>
     <div class="col-lg-3 col-sm-6 item">
     <div class="counter-block text-start mb-lg-0 mb-4">
        <div class="separator"></div>
        <div class="info">
           <h6 class="text-white">Dealer Reviews</h6>
           <i class="glyph-icon flaticon-interface"></i>
           <b class="timer text-white" data-to="856" data-speed="10000"></b>
         </div>
        </div>
     </div>
     <div class="col-lg-3 col-sm-6 item">
     <div class="counter-block text-start mb-sm-0 mb-4">
        <div class="separator"></div>
        <div class="info">
           <h6 class="text-white">Happy Customer</h6>
           <i class="glyph-icon flaticon-circle"></i>
           <b class="timer text-white" data-to="789" data-speed="10000"></b>
         </div>
        </div>
     </div>
      <div class="col-lg-3 col-sm-6 item">
      <div class="counter-block text-start mb-0">
        <div class="separator"></div>
        <div class="info">
           <h6 class="text-white">Awards</h6>
            <i class="glyph-icon flaticon-cup"></i>
           <b class="timer text-white" data-to="356" data-speed="10000"></b>
         </div>
        </div>
     </div>
    </div>
  </div>
</section>

 <!--=================================
 Counter -->


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
     <div class="owl-carousel owl-theme" data-nav-dots="true" data-items="3" data-md-items="3" data-sm-items="2" data-xs-items="2" data-space="30">
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