<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use App\reservation;
use App\User;
use Session;
//use App\Http\Requests;
use App\Http\Controllers\Controller;

class hotelcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        reservation::create(Request::all());

return 'success';
    }

public function login()
{
$check =  Request::all();
//return $check;
//$model = Profile::where('email',  $check['email'],'password',  $check['password']])->firstOrFail();
$model = User::where('email', $check['email'])
      ->where('password', $check['password'])     
      ->get();
      if (count($model) > 0) {
        # code...
        //echo "login Successful";
        //$check->session()->put('mail',$check['email']); 
        Session::put('eposta',$check['email']);
 //    echo Session::get('eposta');
      
//.$check->session()->get('mail');
     $items = reservation::all();

//return $items;
    return view('panel',compact('items'));
      }
      else




  return view('admin');





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
        //
    }
}
