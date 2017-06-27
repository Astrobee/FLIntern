<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

use App\User;
use App\Quote;


class QuotesController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
    	
        $quote = Quote::latest()->get();

        return view('main.quotes', compact('quote'));
    }



    public function create()
    {
    	return view('quotes.create');
    }



    public function store(Request $request)
    {
    	$this->validate(request(),
    		[
    			'title'=>'required',
    			'body'=>'required',
    		]);

 
    		// $quote = Quote::create(
    		// 	[
    		// 		'title'=>$request->title,
    		// 		'body'=>$request->body,
    		// 		'user_id' =>auth()->id()..........AUTH()->ID() NOT WORKING 
    		// 	]
    		// 	);

    		$quote = new Quote;

    		$quote->title = $request->title;
    		$quote->body=$request->body;
    		$quote->user_id=auth()->id();

    		$quote->save();

                        session()->flash('message','Your Quote has been published successfully');

    		return redirect()->back();
    }

}
