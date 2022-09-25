<?php

namespace App\Http\Controllers;

use App\Models\RegDriver;
use App\Models\Trip;
use Illuminate\Http\Request;

class CarListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {




        // *******************************************************

        $LocationFrom = $request->input('location_from');

        $LocationTo = $request->input('location_to');

        $PassengerNumber = $request->input('passengers_numbers');


        $booking_luggages = $request->input('booking_luggages');



        $car = Trip::join('reg_drivers', 'reg_drivers.user_driver_id', '=',
            'trips.trip_driver_id'
        )->get(['*']);




        if ($LocationFrom != null & $LocationTo != null & $PassengerNumber != null & $booking_luggages != null) {
            $car = Trip::join('reg_drivers', 'reg_drivers.user_driver_id', '=', 'trips.trip_driver_id')
                ->where('trips.location_from', '=', $LocationFrom)
                ->where('trips.location_to', '=', $LocationTo)
                ->where('trips.passengers_numbers', '=', $PassengerNumber)
                ->where('trips.booking_luggages', '=', $booking_luggages)
                ->get(['*']);
        } else if ($LocationFrom != null & $LocationTo != null & $PassengerNumber != null) {
            $car = Trip::join('reg_drivers', 'reg_drivers.user_driver_id', '=', 'trips.trip_driver_id')
                ->where('trips.location_from', '=', $LocationFrom)
                ->where('trips.location_to', '=', $LocationTo)
                ->where('trips.passengers_numbers', '=', $PassengerNumber)
                // ->where('trips.booking_luggages', '=', $booking_luggages)
                ->get(['*']);
        } else if ($LocationFrom != null & $LocationTo != null) {
            $car = Trip::join('reg_drivers', 'reg_drivers.user_driver_id', '=', 'trips.trip_driver_id')
                ->where('trips.location_from', '=', $LocationFrom)
                ->where('trips.location_to', '=', $LocationTo)
                // ->where('trips.passengers_numbers', '=', $PassengerNumber)
                // ->where('trips.booking_luggages', '=', $booking_luggages)
                ->get(['*']);
        } else if ($LocationFrom != null) {
            $car = Trip::join('reg_drivers', 'reg_drivers.user_driver_id', '=', 'trips.trip_driver_id')
                ->where('trips.location_from', '=', $LocationFrom)
                // ->where('trips.location_to', '=', $LocationTo)
                // ->where('trips.passengers_numbers', '=', $PassengerNumber)
                // ->where('trips.booking_luggages', '=', $booking_luggages)
                ->get(['*']);
        } else if ($LocationTo != null) {
            $car = Trip::join('reg_drivers', 'reg_drivers.user_driver_id', '=', 'trips.trip_driver_id')
                // ->where('trips.location_from', '=', $LocationFrom)
                ->where('trips.location_to', '=', $LocationTo)
                // ->where('trips.passengers_numbers', '=', $PassengerNumber)
                // ->where('trips.booking_luggages', '=', $booking_luggages)
                ->get(['*']);
        }else {
            $car = Trip::join('reg_drivers', 'reg_drivers.user_driver_id', '=', 'trips.trip_driver_id')->get(['*']);
        }



        return view('cars', compact('car'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
