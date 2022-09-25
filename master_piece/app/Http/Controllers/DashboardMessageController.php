<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Review;
use Illuminate\Http\Request;

class DashboardMessageController extends Controller
{
    public function index()
    {
       $user=Contact::all();


        return view('dashboard.dashboardMessage',compact('user'))  ->with(request()->input('page'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
// $driver=User::join('cars','cars.driver_id','=','users.id')->get('*');

// $user=User::all();
  
      
//       return view('dashboard.addUser',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 
// $user = new User();
        // $userDetail = new User_Detail();


//         $user->name = $request->input('name');
//         $user->email = $request->input('email');
//         $user->password = Hash::make($request['password']);
//         $user->mobile = $request->input('mobile');
//         $user->address = $request->input('address');

//         if ($request->hasfile('image')) {
//             $file = $request->file('image');
//             $extention = $file->getClientOriginalExtension();
//             $filename = time() . '.' . $extention;
//             $file->move('upload', $filename);
//             $user->image = $filename;
//         }

// $user->save();
// return redirect()->route('dashboardUser.store')
// ->with('success','User information has been added.');



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
     
        // $user = User::where('id', $id)->first();

        // return view('dashboard.editUser',compact('user'));
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
// $user = new User();
        
//          if($request->hasfile('image'))
//          {
//              $file = $request->file('image');
//              $extention = $file->getClientOriginalExtension();
//              $filename = time().'.'.$extention;
//              $file->move('upload', $filename);
//              $user ->image = $filename;
//          }

// User::where('id',$id)->update([

//             'name' => $request->name,
//             'email' => $request->email,
//             'password' => $request->password,
//             'mobile' => $request->mobile,
//             'address' => $request->address,
// 'image' =>$user ->image 
//  ]);



// return redirect()->route('dashboardUser.index')
// ->with('success','User Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {  
        
        $delete = Contact::find($id);
        $delete->delete();
        return redirect()->route('dashboardMessage.index')
                        ->with('success','user deleted successfully');
    
    }
}
