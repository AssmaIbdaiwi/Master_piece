
@extends('master')
@section('content')
<!--=================================
 inner-intro -->

 <section class="inner-intro bg-1 bg-overlay-black-70">
  <div class="container">
     <div class="row text-center intro-title">
           <div class="col-md-6 text-md-start d-inline-block">
             <h1 class="text-white">Contact us </h1>
           </div>
           <div class="col-md-6 text-md-end float-end">
             <ul class="page-breadcrumb">
           
             </ul>
           </div>
     </div>
  </div>
</section>

<!--=================================
 inner-intro -->
<!--=================================
 contact -->

<section class="contact page-section-ptb white-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
         <div class="section-title">
           <span>We’d Love to Hear From You</span>
           <h2>LET'S GET IN TOUCH!</h2>
           <div class="separator"></div>
         </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6 col-sm-6">
       <div class="contact-box text-center grey-border">
          <i class="fa fa-map-marker"></i>
          <h5>Address</h5>
          <p>Irbid</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
       <div class="contact-box text-center grey-border">
          <i class="fa fa-phone"></i>
          <h5>Phone</h5>
          <p> (077) 456 7890</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6 mb-2 mb-sm-0">
       <div class="contact-box text-center grey-border mb-4 mb-sm-0">
          <i class="material-icons">&#xe0be;</i>
          <h5>Email</h5>
          <p> wasselnyt@website.com</p>
        </div>
      </div>
      <div class="col-lg-3 col-md-6 col-sm-6">
       <div class="contact-box text-center mb-0 grey-border">
          <i class="fa fa-fax"></i>
          <h5>Fax</h5>
          <p>(007) 123 456 7890</p>
        </div>
      </div>
    </div>
    <div class="page-section-ptb">
      <div class="row">
       <div class="col-lg-8 col-sm-12">
       <div class="gray-form">
         <div id="formmessage" class="form-notice" style="display:none;">Success/Error Message Goes Here</div>

         <form action="{{route('contact.store')}}" method="POST">

             @csrf

            <div class="contact-form">
              <div class="col-md-12">
               <div class="mb-3">
            <label style="color:black; font-weight:bold;  margin-left:2%"> Name:</label>
                 <input id="contactform_name" type="text" placeholder="Name*" class="form-control"  name="name">
               </div>
             </div>
             <div class="col-md-12">
               <div class="mb-3">
                <label style="color:black; font-weight:bold;  margin-left:2%"> Email:</label>
                 <input id="contactform_email" type="email" placeholder="Email*" class="form-control" name="email">
                </div>
              </div>
              <div class="col-md-12">
                 <div class="mb-3">
                  <label style="color:black; font-weight:bold; margin-left:2%"> Message:</label>
                   <textarea id="contactform_message" class="form-control input-message" placeholder="Message*" rows="7" name="msg"></textarea>
                 </div>
              </div>
              <div class="col-md-12">
                 <button id="submit" name="submit" type="submit" value="Send" class="button red">Send your message <i class="fa fa-spinner fa-spin fa-fw btn-loader" style="display: none;"></i></button>
               </div>
              </div>
          </form>

          </div>
           </div>
       

     </div>
     </div>
 </div>
  </div>
</section>

<!--=================================
 contact -->
<!--=================================
 contact-map -->

 <section class="contact-map">
  <div class="container-fluid">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13469.364378603499!2d35.587065230994725!3d32.43680359721494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151c6044d63a541b%3A0x9e46de4bdab18d8c!2sTabqet%20Fahel!5e0!3m2!1sen!2sjo!4v1660765466277!5m2!1sen!2sjo"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
    referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
 </section>

<!--=================================
 contact-map -->

@endsection
