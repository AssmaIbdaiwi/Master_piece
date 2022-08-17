<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
         return view('contact');
    }

    public function create()
    {
         return view('contact');
    }

    public function store(Request $request)
    {
           $message = new Contact();
    $message->name= $request->name;
    $message->email = $request->email;
    $message->msg= $request->msg;
    $message->save();
    return redirect()->route('contact.store')
    ->with('success','Company has been created successfully.');
    }

    public function show($id)
    {
    
    }


    public function edit($id)
    {
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
       
    }

    public function destroy($id)
    {
        //
    }
}
