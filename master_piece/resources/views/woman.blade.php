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
<form>


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
                                    <p>Driver: {{$cars->driver_fname}} {{$cars->driver_lname}}<br>
                                        {{-- Car number: {{$cars->car_number}} </p> --}}

                                </div>

                                <div class="price">
                                    From:<span class="new-price"> {{$cars->location_from}} </span>
                                    To:<span class="new-price"> {{$cars->location_to}} </span>
                                    {{-- <a class=" button float-end" href="#">View </a> <br><br> --}}
                                    <a class="button float-end" href="#">Book </a>
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

                @endforeach



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
                </div>
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
</style>

@endsection