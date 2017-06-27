<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use Auth;
use Illuminate\Http\Request;

class UserController extends Controller
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
    public function show()
    {
      
        if(Auth::check())
       {

         return view('users.user');
       }

       return redirect()->route('index');
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
    public function update()
    {
        if(isset($_POST['basic']))
        {
            $this->validate(request(),
            [

            'first_name'=> 'required',
            'last_name'=>'required',
            'email'=> 'required|email',
            'password'=>'required|confirmed|min:6'

            ]
            );
        }

       $id = auth()->id();

        $user = User::find($id);

        if(request('first_name')!="" ||request('last_name')!="" ||request('email')!="" ||request('password')!="")
        {
            $user->first_name = request('first_name');
            $user->last_name = request('last_name');
            $user->email = request('email');
            $user->password = bcrypt(request('password'));

             $user->update();
        }

        else if(request('city')!="" ||request('region')!="" ||request('phone')!="" ||request('bio')!="")
        {
            $user->city = request('city');
            $user->region = request('region');
            $user->phone = request('phone');
            $user->bio = request('bio');

             $user->update();
        }

       

    return redirect()->back()->withInput(request()->only('first_name','last_name','email','phone','sex','city','region','bio'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
