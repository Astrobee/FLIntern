<?php

namespace App\Http\Controllers;

use App\Poem;
use App\Tag;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PoemsController extends Controller
{


      public function __construct()
    {
        $this->middleware('auth')->except(['index','singles']);
    }



    public function index()
    {

            $poem = Poem::latest()->get();
            $tag = Tag::has('poems')->pluck('name');

    	return view('main.poems',compact('poem','tag'));
    }

    public function singles($id)
    {
        $poem = Poem::find($id);
        
        return view('poems.single_poem',compact('poem'));
    }


    public function create()
    {
    	return view('poems.create');
    }



    public function store(Request $request)
    {
    	$this->validate(request(),
    		[
    			'title'=>'required',
    			'body'=>'required',
                                    'category'=>'required'
    		]);

            // $poem = Poem::create(
            //             [
            //                 'title'=>$request->title,
            //                 'body'=>$request->body,
            //                 'user_id' =>auth()->id()....nor working
            //             ]
            //             );

         
        //Poem storage
            $poem = new Poem;

            $poem->title = $request->title;
            $poem->body=$request->body;
            $poem->user_id=auth()->id();

            $poem->save();

            $tag = Tag::where('name',$request->category)->first();

            $poem->tags()->attach($tag);

            session()->flash('message','Your Poem has been published successfully');

            return redirect()->back();
    }

}
