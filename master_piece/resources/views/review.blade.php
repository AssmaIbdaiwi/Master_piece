@extends('master')
@section('content')

<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">Profile </h1>
            </div>
            <div class="col-md-6 text-md-end float-end">
            </div>
        </div>
    </div>
</section>
<div class="container light-style flex-grow-1 container-p-y">

    <h4 class="font-weight-bold py-3 mb-4">

    </h4>

    <div class="card overflow-hidden">
        <div class="row no-gutters row-bordered row-border-light">
            <div class="col-md-3 pt-0">
                <div class="list-group list-group-flush account-settings-links">
                    <a class="list-group-item list-group-item-action active" data-toggle="list"
                        href="#account-general">General</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="/profile">Profile
                        informations</a>
                 <a class="list-group-item list-group-item-action" data-toggle="list" href="/review">Add Review</a>
                    @if(Auth::user()->rule == 1) <a class="list-group-item list-group-item-action" data-toggle="list"
                        href="/drivercar-info">Car
                        informations</a>
                    <a class="list-group-item list-group-item-action" data-toggle="list" href="/tripadd">Trip add</a>
                    @endif
               
                </div>
            </div>
            <div class="col-md-9">
                <div class="tab-content">

<form method="POST" action="{{route('review.store',Auth::user()->id)}}" enctype="multipart/form-data">

    @csrf
<div class="tab-pane fade active show" id="account-general">
    <div class="card-body">
<div class="form-group">
    <label class="form-label" style="color: blue; font-weight:bolder">Add your feedback</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg_feedback"> </textarea>
  </div>  
  <div class="text-right mt-3">
        <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
    </div>
</div>
</div>

             </form>       
                    {{-- <form method="POST" action="{{route('profile.update',Auth::user()->id)}}"
                        enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="tab-pane fade active show" id="account-general">

                            <div class="card-body media align-items-center">
                                <img src="{{asset('upload/'.Auth::user()->image)}}" alt="user image"
                                    class="d-block ui-w-80">
                                <div class="media-body ml-4">
                                    <h4></h4>

                                    <label class="btn btn-outline-primary">
                                        Upload Your photo
                                        <input type="file" class="account-settings-fileinput" type="file"
                                            placeholder="Password" name="image">
                                    </label> &nbsp;

                                </div>
                            </div>
                            <hr class="border-light m-0">

                            <div class="card-body">
                                <div class="form-group">
                                    <label class="form-label">First Name*</label>
                                    <input type="text" class="form-control mb-1" type="text"
                                        value="{{ Auth::user()->name }}" name="name">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Last Name*</label>
                                    <input type="text" class="form-control mb-1" type="text" placeholder="Last Name"
                                        name="lname">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Email*</label>
                                    <input type="email" class="form-control mb-1" value="{{ Auth::user()->email}}"
                                        name="email">

                                <div class="form-group">
                                    <label class="form-label">Mobile*</label>
                                    <input type="text" class="form-control mb-1" type="text" name="mobile">
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Address</label>
                                    <input class="form-control" type="text" name="address">
                                </div>
                                <div class="text-right mt-3">
                                    <button type="submit" class="btn btn-primary">Save changes</button>&nbsp;
                                </div>
                            </div>

                        </div>
                    </form> --}}
                </div>
            </div>
        </div>
    </div>



</div>

<h4 class="font-weight-bold py-3 mb-4">

</h4>
<style>
    body {
        background: #f5f5f5;
        margin-top: 20px;
    }

    .ui-w-80 {
        width: 80px !important;
        height: auto;
    }

    .btn-default {
        border-color: rgba(24, 28, 33, 0.1);
        background: rgba(0, 0, 0, 0);
        color: #4E5155;
    }

    label.btn {
        margin-bottom: 0;
    }

    .btn-outline-primary {
        border-color: #26B4FF;
        background: transparent;
        color: #26B4FF;
    }

    .btn {
        cursor: pointer;
    }

    .text-light {
        color: #babbbc !important;
    }

    .btn-facebook {
        border-color: rgba(0, 0, 0, 0);
        background: #3B5998;
        color: #fff;
    }

    .btn-instagram {
        border-color: rgba(0, 0, 0, 0);
        background: #000;
        color: #fff;
    }

    .card {
        background-clip: padding-box;
        box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012);
    }

    .row-bordered {
        overflow: hidden;
    }

    .account-settings-fileinput {
        position: absolute;
        visibility: hidden;
        width: 1px;
        height: 1px;
        opacity: 0;
    }

    .account-settings-links .list-group-item.active {
        font-weight: bold !important;
    }

    html:not(.dark-style) .account-settings-links .list-group-item.active {
        background: transparent !important;
    }

    .account-settings-multiselect~.select2-container {
        width: 100% !important;
    }

    .light-style .account-settings-links .list-group-item {
        padding: 0.85rem 1.5rem;
        border-color: rgba(24, 28, 33, 0.03) !important;
    }

    .light-style .account-settings-links .list-group-item.active {
        color: #4e5155 !important;
    }

    .material-style .account-settings-links .list-group-item {
        padding: 0.85rem 1.5rem;
        border-color: rgba(24, 28, 33, 0.03) !important;
    }

    .material-style .account-settings-links .list-group-item.active {
        color: #4e5155 !important;
    }

    .dark-style .account-settings-links .list-group-item {
        padding: 0.85rem 1.5rem;
        border-color: rgba(255, 255, 255, 0.03) !important;
    }

    .dark-style .account-settings-links .list-group-item.active {
        color: #fff !important;
    }

    .light-style .account-settings-links .list-group-item.active {
        color: #4E5155 !important;
    }

    .light-style .account-settings-links .list-group-item {
        padding: 0.85rem 1.5rem;
        border-color: rgba(24, 28, 33, 0.03) !important;
    }
</style>










@endsection