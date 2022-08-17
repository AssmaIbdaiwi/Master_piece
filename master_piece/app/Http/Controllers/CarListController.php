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
        // if(isset($request->search)){
            //  $car =Trip::join('reg_drivers','reg_drivers.user_driver_id','=','trips.trip_driver_id')->where('location_from','LIKE', "%{$request->location_from}%")->orWhere('location_to','LIKE', "%{$request->location_to}%")->orWhere('passengers_numbers','LIKE', "%{$request->passengers_numbers}%")->orWhere('booking_luggages','LIKE', "%{$request->booking_luggages}%")->get();
        // }
        // else{ 
            // $car =Trip::join('reg_drivers','reg_drivers.user_driver_id','=','trips.trip_driver_id')->get('*');
        // }
 $search = $request->input('search');

 // Search in the title and body columns from the posts table
 $car= Trip::join('reg_drivers','reg_drivers.user_driver_id','=','trips.trip_driver_id')
 ->where('trips.location_from', 'LIKE', '%' . $request-> location_from . '%')
 ->where('trips.location_to', 'LIKE', '%' . $request-> location_to . '%')
  ->where('trips.passengers_numbers', 'LIKE','%' . $request-> passengers_numbers . '%')
   ->where('trips.booking_luggages', 'LIKE', '%' . $request-> booking_luggages . '%')
 ->get();



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
