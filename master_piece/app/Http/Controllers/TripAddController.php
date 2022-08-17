<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class TripAddController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  $data=Book::join('books.book_driver_id','=','reg_drivers.user_driver_id')->get('*');
           return view('tripadd');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('tripadd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //         $request->validate([
        //     'passengers_numbers' => 'required',
         
        // ]);


      $tripadd = new Trip();   
      $tripadd->trip_driver_id=  Auth::user()->id;
      $tripadd->trip_user_id=Auth::user()->id;
      $tripadd->booking_date= $request->booking_date;
      $tripadd->trip_price= $request->trip_price;
      $tripadd->booking_hour= $request->booking_hour;
      $tripadd->booking_luggages= $request->booking_luggages;


     $tripadd->passengers_numbers= $request->passengers_numbers;
      $tripadd->location_from= $request->location_from;
      $tripadd->location_to= $request->location_to;
   
      
     $tripadd->save();

return redirect()->route('tripadd.store')
->with('success','Trip saved successfully.');
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
