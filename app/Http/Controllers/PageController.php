<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function lessons()
    {
    	return view('main.lessons');
    }

    public function team()
    {
    	return view('main.team');
    }

    public function quotes()
    {
    	return view('main.quotes');
    }

    public function apps()
    {
        
        return view('main.apps');
    }
}
