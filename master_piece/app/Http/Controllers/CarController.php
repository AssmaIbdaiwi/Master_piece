<?php

namespace App\Http\Controllers;
use App\Models\User;
// use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;
use App\Models\RegDriver;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    $data=User::where('users.id','=',Auth::user()->id)->get();
      $driver=RegDriver::where('reg_drivers.user_driver_id','=',Auth::user()->id)->get();
     

// dd($car);
       return view('drivercar-info', compact('data','driver'));
    }








    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
    
       
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
    public function update(Request $request ,$id)
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


//   Alert::success('Congrats', 'You\'ve Successfully Registered');
return redirect()->route('drivercar-info.index') 
->with ('Sweet Alert with success.','User Has Been updated successfully');


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
