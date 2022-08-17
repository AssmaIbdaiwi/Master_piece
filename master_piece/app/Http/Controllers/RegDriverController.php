<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\RegDriver;
use Illuminate\Http\Request;

class RegDriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $data=User::where('users.id','=',Auth::user()->id)->get('*');



       return view('driver-register', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('driver-register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        
 $driver = new RegDriver();

    if($request->hasfile('driver_image'))
         {
             $file = $request->file('driver_image');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('upload', $filename);
             $driver ->driver_image = $filename;
         }



    if($request->hasfile('id_card'))
         {
             $file = $request->file('id_card');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('upload', $filename);
             $driver ->id_card = $filename;
         }
 if($request->hasfile('license'))
         {
             $file = $request->file('license');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('upload', $filename);
             $driver ->license = $filename;
         }
 if($request->hasfile('car_image'))
         {
             $file = $request->file('car_image');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('upload', $filename);
             $driver ->car_image = $filename;
         }



$driver->user_driver_id=Auth::user()->id;
$driver->rule=Auth::user()->rule;
$driver->driver_fname = Auth::user()->name;
$driver->driver_lname = $request->driver_lname;
$driver->driver_email = Auth::user()->email;
$driver->driver_address = $request->driver_address;
$driver->driver_mobile = $request->driver_mobile;
$driver->gender = $request->gender;


$driver->car_model= $request->car_model;
$driver->car_description  = $request->car_description;
$driver-> car_number = $request->car_number;
$driver-> car_color = $request->car_color;


$driver->save();

return redirect()->route('driver-register.store')
->with('success','You are now a driver.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RegDriver  $regDriver
     * @return \Illuminate\Http\Response
     */
    public function show(RegDriver $regDriver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RegDriver  $regDriver
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            
        $driver = RegDriver::where('id', $id)->first();

        return view('drivercar-info',compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RegDriver  $regDriver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
 $driver = new RegDriver();
        
 if($request->hasfile('car_image'))
         {
             $file = $request->file('car_image');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('upload', $filename);
             $driver ->car_image = $filename;
         }

RegDriver::where('user_driver_id',Auth::user()->id)->update([

            'car_model' => $request->car_model,
            'car_description' => $request->car_description,
            'car_number' => $request->car_number,
            'car_color' => $request->car_color,
            'car_image' =>$driver ->car_image
 ]);



return redirect()->route('drivercar-info')
->with('success','User Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RegDriver  $regDriver
     * @return \Illuminate\Http\Response
     */
    public function destroy(RegDriver $regDriver)
    {
        //
    }
}
