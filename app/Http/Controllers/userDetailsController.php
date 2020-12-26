<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\userDetails;

class userDetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
   // {
     //   $userDetails = userDetails::all();
       // return view('userDetails.index', compact('userDetails'));
    //}

    function index()
    {
        $data= userDetails::all();
         return view("userDetails.viewDetails",compact("data"));
        return view('view',['userDetails'=>$data]);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userDetails.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
           'name'=>'required',
           'phoneNum'=>'required',
           'email'=>'required'
       ]);

       $userDetails = new userDetails([
           'name'=> $request->get('name'),
           'phoneNum'=> $request->get('phoneNum'),
           'email'=> $request->get('email'),
           'birthdate'=> $request->get('birthdate'),
           'age' => $request->get('age'),
           'occupation' => $request->get('occupation'),
           'gender' => $request->get('gender'),
           'address'=> $request->get('address'),
           'postcode' => $request->get('postcode'),
           'city' => $request->get('city'),
           'state' => $request->get('state'),
       ]);
       $userDetails->save();
       return redirect()->route('view.detail')->with('Success', 'Details saved!');

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
