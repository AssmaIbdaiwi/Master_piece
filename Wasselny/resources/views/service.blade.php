
@extends('master')
@section('content')

<!--=================================
 mega menu -->

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
                              <li><a href="about-01.html">About 01</a></li>
                              <li><a href="about-02.html">About 02</a></li>
                              <li><a href="service-01.html">service 01</a></li>
                              <li class="active"><a href="service-02.html">service 02</a></li>
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
             <h1 class="text-white">Service </h1>
           </div>
           <div class="col-md-6 text-md-end float-end">
             <ul class="page-breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-double-right"></i></li>
                <li><a href="#">pages</a> <i class="fa fa-angle-double-right"></i></li>
                <li><span>Service 02</span> </li>
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 service -->

<section class="welcome-block objects-car why-choose page-section-ptb white-bg">
 <div class="objects-left"><img class="img-fluid objects-1" src="images/objects/03.jpg" alt=""></div>
 <div class="objects-right"><img class="img-fluid objects-2" src="images/objects/04.jpg" alt=""></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="section-title">
           <span>Welcome to our website</span>
           <h2>Our service</h2>
           <div class="separator"></div>
           <p>Car Dealer is the best premium HTML5 Template. We provide everything you need to build an <strong>Amazing dealership website</strong>  developed especially for car sellers, dealers or auto motor retailers. You can use this template for creating website based on any framework and any language.</p>
         </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-sm-6">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-beetle"></i>
          </div>
          <div class="content">
            <h6>All brands</h6>
            <p>Lorem Ipsum is simply dummy text of the printin  k a galley of type and</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-interface-1"></i>
          </div>
          <div class="content">
            <h6>Free Support</h6>
            <p>Lorem Ipsum is simply dummy text of the printin  k a galley of type and</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-key"></i>
          </div>
          <div class="content">
            <h6>Dealership</h6>
            <p>Lorem Ipsum is simply dummy text of the printin  k a galley of type and</p>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6">
        <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-wallet"></i>
          </div>
          <div class="content">
            <h6>AFFORDABLE</h6>
            <p>Lorem Ipsum is simply dummy text of the printin  k a galley of type and</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
     <div class="col-lg-3 col-sm-6">
       <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-gas-station"></i>
          </div>
          <div class="content">
            <h6>OIL CHANGES</h6>
            <p>Printin lorem Ipsum is simply dummy text of the k a galley of type and</p>
          </div>
        </div>
     </div>
     <div class="col-lg-3 col-sm-6">
       <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-air-conditioning"></i>
          </div>
          <div class="content">
            <h6>air conditioning</h6>
            <p>Aliquid illo similique minima magni quidem sequi corporis fugiat type and</p>
          </div>
        </div>
     </div>
     <div class="col-lg-3 col-sm-6">
       <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-electrical-service"></i>
          </div>
          <div class="content">
            <h6>Auto electric</h6>
            <p>similique minima magni quidem aliquid illo sequi corporis fugiat type and </p>
          </div>
        </div>
     </div>
     <div class="col-lg-3 col-sm-6">
       <div class="feature-box text-center">
          <div class="icon">
            <i class="glyph-icon flaticon-gearstick"></i>
          </div>
          <div class="content">
            <h6>transmission</h6>
            <p>Magni quidem aliquid illo sequi similique minima corporis fugiat type </p>
          </div>
        </div>
     </div>
   </div>
    <div class="row">
       <div class="col-md-12">
          <div class="halp-call text-center">
            <img class="img-fluid" src="images/team/01.jpg" alt="">
            <span>Have a any question ?</span>
            <h2 class="text-red">(007) 123 456 7890</h2>
          </div>
       </div>
    </div>
  </div>
</section>

<!--=================================
 service -->


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
custom-block -->

<section class="custom-block-3 white-bg page-section-ptb">
  <div class="container">
   <div class="row">
    <div class="col-md-6">
        <div class="title">
          <h3>Car dealer</h3>
        </div>
        <div class="content">
          <h2 class="text-red">10</h2>
          <strong>Everything you need to build an amazing dealership automotive responsive website.</strong>
          <p>Car Dealer is the best premium HTML5 Template. We provide everything you need to build an <b>Amazing dealership website</b>  developed especially for car sellers, dealers or auto motor retailers.</p>
        </div>
      </div>
    <div class="col-md-6">
      <img class="img-fluid" src="images/car/11.png" alt="">
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
            <p>Simply Ipsum is lorem </p>
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
            <p> Beatae dicta et optio</p>
          </div>
         </div>
        </div>
       <div class="col-lg-3 col-sm-6">
         <div class="feature-box-3">
          <div class="icon">
            <i class="glyph-icon flaticon-key"></i>
          </div>
          <div class="content">
            <h6>Dealership</h6>
            <p>Iure, quidem maxime </p>
          </div>
         </div>
        </div>
        <div class="col-lg-3 col-sm-6">
         <div class="feature-box-3">
          <div class="icon">
            <i class="glyph-icon flaticon-wallet"></i>
          </div>
          <div class="content">
            <h6>Affordable</h6>
            <p>Quod magni recusandae </p>
          </div>
         </div>
        </div>
      </div>
  </div>
</section>

<!--=================================
 custom-block -->

<hr class="gray" />

<!--=================================
 service schedule -->

<section class="service-schedule white-bg page-section-ptb">
 <div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="section-title">
         <span>Get a customized maintenance schedule for your vehicle</span>
         <h2>service schedule </h2>
         <div class="separator"></div>
      </div>
    </div>
   </div>
   <div class="row">
    <div class="col-md-8">
    <div class="gray-form">
         <div id="formmessage">Success/Error Message Goes Here</div>
           <form class="form-horizontal" id="contactform" role="form" method="post" action="http://themes.potenzaglobalsolutions.com/html/cardealer/php/contact-form.php">
            <div class="row contact-form">
              <div class="col-lg-4 col-sm-12">
               <div class="mb-3">
                 <input id="name" type="text" placeholder="Name*" class="form-control"  name="name">
               </div>
             </div>
             <div class="col-lg-4 col-sm-12">
               <div class="mb-3">
                 <input type="email" placeholder="Email*" class="form-control" name="email">
                </div>
              </div>
              <div class="col-lg-4 col-sm-12">
                <div class="mb-3">
                  <input type="text" placeholder="Phone*" class="form-control" name="phone">
                </div>
              </div>
              <div class="col-md-12">
                 <div class="mb-3">
                   <textarea class="form-control input-message" placeholder="Comment*" rows="7" name="message"></textarea>
                 </div>
              </div>
              <div class="col-md-12">
                 <input type="hidden" name="action" value="sendEmail"/>
                 <button id="submit" name="submit" type="submit" value="Send" class="button red"> Send your message </button>
               </div>
              </div>
          </form>
          <div id="ajaxloader" style="display:none"><img class="center-block" src="images/ajax-loader.gif" alt=""></div>
    </div>
   </div>
 <div class="col-md-4">
      <div class="opening-hours gray-bg">
        <h6>opening hours</h6>
        <ul class="list-style-none">
          <li><strong>Sunday</strong> <span class="text-red"> closed</span></li>
          <li><strong>Monday</strong> <span> 9:00 AM to 9:00 PM</span></li>
          <li><strong>Tuesday </strong> <span> 9:00 AM to 9:00 PM</span></li>
          <li><strong>Wednesday </strong> <span> 9:00 AM to 9:00 PM</span></li>
          <li><strong>Thursday </strong> <span> 9:00 AM to 9:00 PM</span></li>
          <li><strong>Friday </strong> <span> 9:00 AM to 9:00 PM</span></li>
          <li><strong>Saturday </strong> <span> 9:00 AM to 9:00 PM</span></li>
        </ul>
       </div>
      </div>
     </div>
   </div>
</section>

<!--=================================
service schedule -->

@endsection
