<?php

namespace App\Http\Controllers;

use App\Models\RegDriver;
use App\Models\Trip;
use Illuminate\Http\Request;

class WomenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $search = $request->input('search');

 // Search in the title and body columns from the posts table
 $car= RegDriver::join('trips','trips.trip_driver_id','=','reg_drivers.user_driver_id')
//  ->where('trips.location_from', 'LIKE', '%' . $request-> location_from . '%')
//  ->where('trips.location_to', 'LIKE', '%' . $request-> location_to . '%')
//   ->where('trips.passengers_numbers', 'LIKE','%' . $request-> passengers_numbers . '%')
//    ->where('trips.booking_luggages', 'LIKE', '%' . $request-> booking_luggages . '%')

 ->get();
//  dd($car);
 return view('woman', compact('car'));
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
