<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class FrontendController extends Controller
{
   public function home($value=''){

    	$movies = Movie::all();
        
    	// dd($items);
    	return view('frontend.home',compact('movies'));
    }

}
