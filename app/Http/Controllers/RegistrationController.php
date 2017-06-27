<?php

namespace App\Http\Controllers;

use App\Mail;
use App\Mail\RegistrationMail;
use App\Photo;
use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register()
   {
   		$this->validate(request(),
   		[
   			'first_name'=> 'required',
                  'last_name'=> 'required',
   			'email'=>'required|email',
   			'password'=>'required|confirmed|min:6',
                  'radiosex'=>'required'
   		]);

          if(request('radiosex') == 'female')
              {
                  $sex = 'Female';
              }

              else
              {
                  $sex = 'Male';
              }

   		$user = User::create(
   			[
   				'first_name'=>request('first_name'),
                        'last_name'=>request('last_name'),
   				'email'=>request('email'),
   				'password'=>bcrypt(request('password')),
                        'sex'=>$sex

   			]);

             auth()->login($user);
      
             $image =new Photo;
              
             $image->id = auth()->id();
             $image->user_id = auth()->id();
             $image->name = null;
             $image->path = null;

             $image->save();

	  // sending user a registration success mail
        //\Mail::to($user)->send(new RegistrationMail($user));

        
        
        session()->flash('message','Registration complete...Check your mail inbox for a welcome note');

	   return redirect('/');
   }
}
