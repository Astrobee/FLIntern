<?php

namespace App\Http\Controllers;

use App\Visitor;
use Auth;
use Illuminate\Http\Request;

use App\Mail\Contact_me;
use App\Mail;

class VisitorController extends Controller
{
     public function contact_me()
   {
   		if (Auth::check()) 
	   	{
	   		$this->validate(request(),
		   		[
		   			'message'=>'required|min:10'
		   		]);
   		}

   		else
   		{
   			$this->validate(request(),
		   		[
		   			'name'=> 'required|min:3',
		   			'email'=>'required|email',
		   			'message'=>'required|min:10'
		   		]);
   		}

   		$visitor = Visitor::create(
   			[
   				'name'=>request('name'),
   				'email'=>request('email'),
   				'message'=>request('message')

   			]);

   		\Mail::to('frimpsastro@gmail.com')->send(new Contact_me($visitor));

   		session()->flash('message','Your message has been sent to me. I will contact you soon');

   		return redirect()->intended();
   }
}
