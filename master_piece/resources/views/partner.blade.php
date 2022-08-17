@extends('master')
@section('content')






<!--=================================
 inner-intro -->

<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">Become a partner </h1>
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

                    <h2>Partner request</h2>

                </div>
            </div>
        </div>

<div class="page-section-ptb">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-sm-12">
            <div class="gray-form">
                <div id="formmessage" class="form-notice" style="display:none;">Success/Error Message Goes Here</div>

                <form method="POST" action="{{route('partner.store')}}">

                    @csrf

                    <div class="contact-form">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label style="color:black; font-weight:bold;  margin-left:2%"> Name: *</label>
                                <input id="contactform_name" type="text" placeholder="Name*" class="form-control"
                                    name="name">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label style="color:black; font-weight:bold;  margin-left:2%"> Email: *</label>
                                <input id="contactform_email" type="email" placeholder="Email*" class="form-control"
                                    name="email">
                            </div>
                        </div>
                        <div class="col-md-12">
                                        <div class="mb-3">
                                            <label style="color:black; font-weight:bold;  margin-left:2%"> Mobile: *</label>
                                            <input id="contactform_name" type="text" placeholder="Mobile*" class="form-control" name="mobile">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label style="color:black; font-weight:bold;  margin-left:2%"> Company name: *</label>
                                                        <input id="contactform_name" type="text" placeholder="Company name*" class="form-control" name="company">
                                                    </div>
                                                </div>
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label style="color:black; font-weight:bold; margin-left:2%"> Job description: *</label>
                                <textarea id="contactform_message" class="form-control input-message"
                                    placeholder="Job description*" rows="7" name="job_description"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button id="submit" name="submit" type="submit" value="Send" class="button red">Send your
                                message <i class="fa fa-spinner fa-spin fa-fw btn-loader"
                                    style="display: none;"></i></button>
                        </div>
                    </div>
                </form>

            </div>
        </div>


    </div>
</div>
</div>
</section>

<!--=================================
 register-form  -->


@endsection