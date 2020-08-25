<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class FrontendController extends Controller
{
   public function home($value=''){

    	$movies = Movie::orderBy('id','desc')->take(8)->get();
        
    	// dd($items);
    	return view('frontend.home',compact('movies'));
    }
    public function payment($value=''){

    	return view('frontend.payment');
    }
    public function about($value=''){

    	return view('frontend.about');
    }
    public function seat(Request $request){
        



    	return view('frontend.seat');
    }
    public function booking($value=''){

    	return view('frontend.booking');
    }


}
