<?php

namespace App\Http\Controllers;

use App\UserOne;
use App\UserPost;
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
//        $message =
//             "Name: ".$name."\n"
//            ."Email: ".$email ."\n"
//            ."Pass: ".$pass."\n"
//            ."gender: ".$gender."\n"
//            ."Check: ".$check;
        // store the data into database
        $userOne = new UserOne();
        $userOne->full_name = $name;
        $userOne->email = $email;
        $userOne->password = $pass;
        $userOne->gender = $gender;
        $userOne->check_me = $check;
        $userOne->save();
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


    public function showAll(){
       $all_data = UserOne::all();
       return view("user_list")
           ->with("all_data",$all_data);
       // send it to view
    }

    public function showPostForm(){
        $users = UserOne::all();
        return view("post_form")
            ->with("users_data",$users);
    }

    public function storePostData(Request $request){
        $this->validate($request,[
            'user_id'=>'required',
            'title'=>'required|min:6',
            'description'=>'required|min:10'
        ]);

        // data store
        $post = new UserPost();
        $post->user_id = $request->user_id;
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();

        // message
        Session::flash("success_done","Successfully Store Post Data");

        // redirect to where
        return redirect()->back();
    }

    // get route param method
    public function showEditUserForm($user_id){
        // 1st way
        $user_data = UserOne::find($user_id);
        // 2nd way
        $user_data2 = UserOne::where("id",$user_id)
            ->first();
        return view('user_edit_form')
            ->with('user',$user_data);
    }

    public function updateUser(Request $request,$user_id){
      // validation
        $this->validate($request,[
            "full_name"=>"required",
            "email"=>"required|email",
            "password"=>"required|min:6",
            "gender"=>"required",
            "check_me"=>"required"
        ]);

        // update data to database
        $user = UserOne::find($user_id);
        $user2 = UserOne::where('id',$user_id)->first();
        $user->full_name = $request->full_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->gender = $request->gender;
        $user->check_me = $request->check_me;
        $user->save();

        // message
        Session::flash('success_done',"Successfully updated");

        // return to where
        return redirect()->back();
    }
}
