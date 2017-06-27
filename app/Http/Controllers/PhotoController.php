<?php

namespace App\Http\Controllers;

use App\Photo;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PhotoController extends Controller
{
    
    public function __construct()
    {
    	$this->middleware('auth');
    }


    public function store(Request $request)
    {
    	

    	$validext = array("jpg","jpeg","png");

    	if($request->hasfile('image'))
    	{
    		$file =Photo::find(auth()->id());

    		if(in_array( strtolower($request->image->extension()), $validext))
    		{
    			$name = $file->name = auth()->id() . '.' .$request->image->extension();

    			

    			$image = Storage::putFileAs('public/profiles', $request->image, $name);
    			
    			$file->path = "/storage/profiles";

    			$file->update();


    			return redirect()->back();
    		}

    		else
    		{
    			return redirect()->back()->withErrors(['message'=>'incorrect file extension. File must be in "jpg, jpeg or png" format']);
    		}
    	}

    	else
    	{
    		session()->flash('filerr','error');
    		return redirect()->back()->withErrors(['message'=>"please choose an image to upload"]);
    	}
    }

}
