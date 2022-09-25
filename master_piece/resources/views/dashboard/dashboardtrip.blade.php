@extends('dashboard.common.master2')
@section('content2')

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Trip Table </h3>

        </div>
        <div class="row">


            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {{-- <h4 class="card-title"><a href={{route('dashboardCar.create')}}
                                class="btn btn-primary ">Add</a></h4> --}}
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>



                                    <tr>
                                        <th> Id </th>
                                        <th>Driver Name </th>
                                        <th> Location from </th>
                                        <th> Location to </th>
                                        <th> Trip date</th>
                                        <th> Trip hour</th>
                                        <th> Trip price</th>
                                        <th> Trip luggages</th>
                                        <th> Trip action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($user as $item)
                                    <tr>

                                        <td> {{$item->id}} </td>

                                        <td>
                                            {{ $item->driver_fname}}
                                        </td>
                                        {{-- <td class="py-1">
                                            <img src="{{asset('upload/'.$item->car_image )}}" alt="">
                                        </td> --}}
                                        <td> {{$item->location_from}} </td>
                                        <td>{{$item->location_to}} </td>
                                        <td>{{$item->booking_date}} </td>
                                        <td>{{$item->booking_hour}} </td>
                                        <td>{{$item->trip_price}} </td>
                                        <td>{{$item->booking_luggages}} </td>

                                        <td>
                                            <form action=" {{ route('dashboardtrip.destroy',$item->id) }}"  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger" type="submit">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <!-- content-wrapper ends -->


    @endsection