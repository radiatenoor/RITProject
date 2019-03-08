<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserOneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $name = "Noor";
      $address = "Firmview 5th Floor, Firmgate";
      $email = "<div style='color: #761b18'>radiate@gmail.com</div>";
      return view("user")
          ->with("show_name",$name)
          ->with("address",$address)
          ->with("email",$email);

        //->withAddress($address);
        // compact([])
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("user_form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $this->validate($request,[
            "full_name"=>"required",
            "email"=>"required|email",
            "password"=>"required|min:6",
            "gender"=>"required",
            "check_me"=>"required"
        ]);

        $name = $request->full_name; // $_POST['full_name']
        $email = $request->email;
        $pass = $request->password;
        $gender = $request->gender;
        $check = $request->check_me;
        $message =
             "Name: ".$name."\n"
            ."Email: ".$email ."\n"
            ."Pass: ".$pass."\n"
            ."gender: ".$gender."\n"
            ."Check: ".$check;
        // store the data into database
        //dd($message) // for debugging
       Session::flash("success_done","Successfully Data Inserted");
       return redirect()->back();
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
