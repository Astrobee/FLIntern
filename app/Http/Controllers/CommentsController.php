<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{



    public function index()
    {

    }



    public function store(Request $request)
    {
    	$this->validate(request(),
    		[
    			'body'=>'required'
    		]);


    	$comment = new Comment;

    	$comment->body = $request->body;
    	$comment->user_id = auth()->id();
    	$comment->poem_id=$request->p_id;

    	$comment->save();

    	return redirect()->back();

    }
}
