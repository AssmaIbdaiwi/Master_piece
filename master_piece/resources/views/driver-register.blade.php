@extends('master')
@section('content')






<!--=================================
 inner-intro -->

 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-start d-inline-block">
             <h1 class="text-white">Become a driver </h1>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
 register-form  -->

<section class="register-form page-section-ptb">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-10">
         <div class="section-title">
        
           <h2>Registration Form</h2>
     
         </div>
      </div>
    </div>
   
        <form class="form-card"  method="POST"  action="{{route('driver-register.store')}}" enctype="multipart/form-data">
     @csrf
                        
    <div class="row justify-content-center">
       <div class="col-lg-8 col-md-12">
        <div class="gray-form">
           <div class="row">
           <div class="mb-3 col-md-6">
             <label class="form-label">First Name*</label>
                <input class="form-control" type="text" placeholder="Your Name" name="driver_fname" value="{{ Auth::user()->name }}"  disabled>
            </div>
            <div class="mb-3 col-md-6">
             <label class="form-label">Last Name*</label>
              <input class="form-control" type="text" placeholder="Last Name" name="driver_lname">
             </div>
                         <div class="mb-3">
             <label class="form-label">Email*</label>
              <input class="form-control" type="text" placeholder="Last Name" name="driver_email"value="{{ Auth::user()->email}}"disabled>
            </div>
           <div class="mb-3">
             <label class="form-label">Mobile* </label>
               <input  class="form-control" type="text" placeholder="Enter your mobile number" name="driver_mobile">
            </div>
                        <div class="mb-3">
             <label class="form-label">Address</label>
               <input class="form-control" type="text" placeholder="Enter your address" name="driver_address">
            </div>
                            <div class="mb-3">
                 <label class="form-label">Gender *</label><br>
                 <div >
                  <label for="male"> male
                <input class="" type="radio" id="male" name="gender" value="male"></label>
               <label for="female">female
                 <input class="" type="radio" id="female" name="gender" value="female"></label>
                  
                </div> 
                </div>
            <div class="mb-3">
             <label class="form-label">Driver Image*</label>
               <input class="form-control" type="file"  name="driver_image">
            </div>

            <div class="mb-3">
             <label class="form-label">ID card * (pdf)</label>
               <input  class="form-control" type="file" name="id_card">
            </div>

<hr>
<h5><br>Car Information</h5>
            <div class="mb-3">
             <label class="form-label">Car License * (pdf)</label>
               <input class="form-control" type="file" name="license">
            </div>   
                       <div class="mb-3">
             <label class="form-label">Car Image* (pdf)</label>
               <input class="form-control" type="file" name="car_image">
            </div>    
                                    <div class="mb-3">
             <label class="form-label">Car model</label>
               <input class="form-control" type="text" placeholder="Enter your address" name="car_model">
            </div>
                                    <div class="mb-3">
             <label class="form-label">Car number</label>
               <input class="form-control" type="text" placeholder="Enter your address" name="car_number">
            </div>
                                    <div class="mb-3">
             <label class="form-label">Car color</label>
               <input class="form-control" type="text" placeholder="Enter your address" name="car_color">
            </div>
                                    <div class="mb-3">
             <label class="form-label">Car description</label>
               <input class="form-control" type="text" placeholder="Enter your address" name="car_description">
            </div>
                 <div class="mb-3">
                  <div class="remember-checkbox">
                     <input type="checkbox" name="one" id="one" />
                      <label for="one">Accept our <a href="#"> privacy policy</a> and <a href="#"> customer agreement</a></label>
                     </div>
                     </div>
                   <div class="col-md-12">
                 <button id="submit" name="submit" type="submit" value="Send" class="button red">Register <i class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;"></i></button>
               </div>
                  
               </div>
           </div>
       </div>
    </div>
  </form>
</section>

<!--=================================
 register-form  -->


@endsection