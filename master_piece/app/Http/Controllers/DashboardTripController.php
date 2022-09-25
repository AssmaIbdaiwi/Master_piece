<?php

namespace App\Http\Controllers;

use App\Models\RegDriver;
use App\Models\Trip;
use Illuminate\Http\Request;

class DashboardTripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $users=Trip::all();
         $user=RegDriver::Join('trips','trips.trip_driver_id','=','reg_drivers.user_driver_id')->get(['*']);


        return view('dashboard.dashboardtrip',compact('user','users'))  ->with(request()->input('page'));  
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
        $delete = Trip::find($id);
        $delete->delete();
        return redirect()->route('dashboardtrip.index')
                        ->with('success','trip deleted successfully');
    }
}
