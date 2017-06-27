<?php

namespace App\Http\Controllers;

use App\Poem;
use App\Tag;
use Illuminate\Http\Request;

class TagsController extends Controller
{
    public function index(Tag $tag)
    {
    	
    	$poem = $tag->poems;

	$tag = Tag::has('poems')->pluck('name');

    	return view('main.poems',compact('poem','tag'));
    }
}
