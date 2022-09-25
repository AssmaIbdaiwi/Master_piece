@extends('master')
@section('content')



<!--=================================
 inner-intro -->

<section class="inner-intro bg-1 bg-overlay-black-70">
    <div class="container">
        <div class="row text-center intro-title">
            <div class="col-md-6 text-md-start d-inline-block">
                <h1 class="text-white">Booking car </h1>
            </div>

        </div>
    </div>
</section>

<!--=================================
 inner-intro -->


<!--=================================
product-listing  -->
<!-- Booking Start -->
<form >


    <div class="container">
        <div class="bg-white shadow" style="padding: 35px;">
            <div class="row g-2">
                <div class="col-md-10">
                    <div class="row g-2">
                        <div class="col-md-3">
                            <select class="form-control" name="location_from">
                                <option disabled selected hidden> From...</option>
                                <option value="Tabeqet_Fahel">Tabeqet Fahel</option>
                                <option value="Masharee">Masharee</option>
                                <option value="Wade_AlRayan">Wade AlRayan</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="location_to">
                                <option disabled selected hidden> To...</option>
                                <option value="Amman">Amman</option>
                                <option value="Irbid">Irbid</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select name="passengers_numbers" class="form-control">
                                <option disabled selected hidden> N. of passengers</option>
                                <option value="1"> 1</option>
                                <option value="2"> 2</option>
                                <option value="3"> 3</option>
                                <option value="4"> 4</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="booking_luggages">
                                <option disabled selected hidden>luggages</option>
                                <option value="1"> Yes</option>
                                <option value="2"> No</option>

                            </select>
                        </div>

                        {{-- <div class="col-md-2">
                            <select class="form-select">
                                <option selected>Gender</option>
                                <option value="1"> Male</option>
                                <option value="2"> Female</option>

                            </select>
                        </div> --}}
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary w-75" style="background-color:#ffd322; border-color:#ffd322 "
                        type="submit">Search</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking End -->

</form>

<section class="product-listing page-section-ptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="listing-sidebar">
                    <div class="widget-banner">
                        <img class="img-fluid center-block" src="images/banner.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-8">


                @foreach ($car as $cars)
                <div class="car-grid">
                    <div class="row">
                        <div class="col-lg-4 col-md-12">
                            <div class="car-item gray-bg text-center">
                                <div class="car-image">
                                    <img class="img-fluid " src="{{asset('upload/'.$cars->car_image)}}" alt="image">

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="car-details">

                                <div class="car-title">
                                    <a href="#">{{$cars->car_model}}</a>
                                    <div class="float-end">
                                        <img src="{{asset('upload/'.$cars->driver_image )}}" id="user-avatar" alt="">
                                    </div>
                                    <div class="price">
                                        Date:<span class="new-price"> {{$cars->booking_date}} </span>
                                        At:<span class="new-price"> {{$cars->booking_hour}} </span>
                                    </div>
                                    <p>Driver:<span style="color:rgb(25, 45, 199); font-weight:bold "> {{$cars->driver_fname}} {{$cars->driver_lname}}</span><br>
                                        {{-- Car number: {{$cars->car_number}} </p> --}}

                                </div>

                                <div class="price">
                                    From:<span class="new-price"> {{$cars->location_from}} </span>
                                    To:<span class="new-price"> {{$cars->location_to}} </span>
                                    {{-- <a class=" button float-end" href="#">View </a> <br><br> --}}
                                    <a class="button float-end" href="#popup1/{{$cars->user_driver_id}}">Book </a>
                                </div>


                                <div class="">
                                    <ul class="list-inline">
                                        <li><i class="fas fa-coins"></i> Price: {{$cars->trip_price}} JD/person</li>
                                        <li><i class="fas fa-car-side"></i> Available: {{$cars->passengers_numbers}}
                                            chair</li>
                                        <li><i class="fas fa-luggage-cart"></i> Luggage: {{$cars->booking_luggages}}
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<div id="popup1/{{$cars->user_driver_id}}" class="overlay">
    <div class="popup">
        <h3>{{$cars->driver_fname}} {{$cars->driver_lname}}</h3>
        <a class="close" href="#">&times;</a>
        <div class="content">
            <iconify-icon icon="carbon:phone-filled" style="color: #ffd322;" width="20" height="20"></iconify-icon>
            Driver mobile: {{$cars->driver_mobile}}<br>
            <iconify-icon icon="fa-solid:car-side" style="color: #ffd322;" width="20" height="20"></iconify-icon> Car
            number:
            {{$cars->car_number}}
        </div>
    </div>
</div>
                @endforeach


{{-- 
                <div class="pagination-nav d-flex justify-content-center">
                    <ul class="pagination">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>
</section>

<!--=================================
product-listing  -->
<style type="text/css">
    #user-avatar {
        width: 60px;
        height: 60px;
        -webkit-border-radius: 100px;
        -moz-border-radius: 100px;
        border-radius: 100px;
    }
    .overlay {
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    background: rgba(0, 0, 0, 0.7);
    transition: opacity 500ms;
    visibility: hidden;
    opacity: 0;
    }
    .overlay:target {
    visibility: visible;
    opacity: 1;
    }
    
    .popup {
    margin: 20% auto;
    padding: 20px;
    background: #fff;
    border-radius: 5px;
    width: 30%;
    position: relative;
    transition: all 5s ease-in-out;
    }
    
    .popup h2 {
    margin-top: 0;
    color: #333;
    font-family: Tahoma, Arial, sans-serif;
    }
    .popup .close {
    position: absolute;
    top: 20px;
    right: 30px;
    transition: all 200ms;
    font-size: 30px;
    font-weight: bold;
    text-decoration: none;
    color: #333;
    }
    .popup .content {
    max-height: 30%;
    overflow: auto;
    }
    
    @media screen and (max-width: 700px){
    .box{
    width: 70%;
    }
    .popup{
    width: 70%;
    }
    }
</style>

@endsection