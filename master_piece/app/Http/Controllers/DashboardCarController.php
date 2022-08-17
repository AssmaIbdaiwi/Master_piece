<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Car;
use Illuminate\Http\Request;

class DashboardCarController extends Controller
{
    public function index()
    {
       $driver=User::join('cars','cars.driver_id','=','users.id')->get('*');

        $car=Car::all();
// dd($car);
        return view('dashboard.dashboardCar',compact('car','driver'))  ->with(request()->input('page'));   ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
// $driver=User::join('cars','cars.driver_id','=','users.id')->get('*');

$driver=User::all();
     $car=Car::all();
      
      return view('dashboard.addCar',compact('car','driver'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
$car = new Car();
$car ->driver_id=$request->driver_id;
$car ->car_model = $request->car_model;
$car ->car_description = $request->car_description;
$car ->car_number = $request->car_number;
$car ->car_color = $request->car_color;

         if($request->hasfile('car_image'))
         {
             $file = $request->file('car_image');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('upload', $filename);
             $car ->car_image = $filename;
         }

$car->save();
return redirect()->route('dashboardCar.store')
->with('success','Your car information has been added.');



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
        $driver=User::all();
        $car = Car::where('id', $id)->first();
        return view('dashboard.editCar',compact('car','driver'));
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
$car = new Car();
        
         if($request->hasfile('car_image'))
         {
             $file = $request->file('car_image');
             $extention = $file->getClientOriginalExtension();
             $filename = time().'.'.$extention;
             $file->move('upload', $filename);
             $car ->car_image = $filename;
         }

 Car::where('id',$id)->update([

'driver_id'=>$request->driver_id,
'car_model'=>$request->car_model,
'car_description'=>$request->car_description,
'car_number'=> $request->car_number,
'car_color' => $request->car_color,
'car_image' =>$car ->car_image 
 ]);



return redirect()->route('dashboardCar.index')
->with('success','Car Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        
        $delete = Car::find($id);
        $delete->delete();
        return redirect()->route('dashboardCar.index')
                        ->with('success','car deleted successfully');
    
    }
}
