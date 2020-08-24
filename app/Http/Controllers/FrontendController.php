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
    public function payment($value=''){

    	return view('frontend.payment');
    }
    public function about($value=''){

    	return view('frontend.about');
    }
    public function seat($value=''){

    	return view('frontend.seat');
    }
    public function booking($value=''){

    	return view('frontend.booking');
    }


}
