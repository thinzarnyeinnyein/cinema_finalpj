<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies=Movie::all();
        // dd($movies);
        return view('backend.movies.index',compact('movies'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $movies=Movie::all();
         // dd($movies);
         return view('backend.movies.create',compact('movies'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validation
        $request->validate([
            'name'=>'required',
            'duration'=>'required',
            'language'=>'required',
            'photo'=>'required',
            'start_date'=>'required',
            'end_date'=>'required'


        ]);

        $imageName=time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/movieimg'),$imageName);

        $myfile='backend/movieimg/'.$imageName;

        //data insert
        $movie=new Movie;
        $movie->name=$request->name;
        $movie->duration=$request->duration;
        $movie->language=$request->language;
        $movie->photo=$myfile;
        $movie->start_date=$request->start_date;
        $movie->end_date=$request->end_date;
        $movie->save();


        //redirect
        return redirect()->route('movies.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $movie=Movie::find($id);
        // dd($movie);
        return view('backend.movies.show',compact('movie'));
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $movie=Movie::find($id);
        return view('backend.movies.edit',compact('movie'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request);

        //validation
        $request->validate([
            'name'=>'required',
            'duration'=>'required',
            'language'=>'required',
            'photo'=>'sometimes',
            'start_date'=>'required',
            'end_date'=>'required'


        ]);

        //if include file,upload
        if ($request->hasFile('photo')){
        $imageName=time().'.'.$request->photo->extension();

        $request->photo->move(public_path('backend/movieimg'),$imageName);

        $myfile='backend/movieimg/'.$imageName;

        //delete old photo (unlink)

        unlink ($request->oldphoto);

    }else{
        $myfile=$request->oldphoto;
    }

     //data update
        $movie=Movie::find($id);
        $movie->name=$request->name;
        $movie->duration=$request->duration;
        $movie->language=$request->language;
        $movie->photo=$myfile;
        $movie->start_date=$request->start_date;
        $movie->end_date=$request->end_date;
        $movie->save();


       //redirect
        return redirect()->route('movies.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie=Movie::find($id);
        $movie->delete();

        //redirect

        unlink ($movie->photo);
        return redirect()->route('movies.index'); 
    }
}
