<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class DownloadController extends Controller
{
    public function wordy()
    {
    	$file = public_path()."/storage/games/wordY_v2.2.2_x64-x32.exe";

    	$headers = [
    			'Content-Type' => 'application/exe',
		    ];

	return Response::download($file, 'wordY_v2.2.2_x64-x32.exe', $headers);
    }




    public function readme()
    {
    	$file = public_path()."/storage/games/Readme.txt";

    	$headers = [
    			'Content-Type' => 'application/txt',
		    ];

	return Response::download($file, 'Readme.txt', $headers);
    }



}
