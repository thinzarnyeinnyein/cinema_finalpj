<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seat;

class SeatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $seats=Seat::all();
        // dd($movies);
        return view('backend.seats.index',compact('seats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.seats.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'type'=>'required',
            'price'=>'required'
    
        ]);
        //Data insert
        $seat = new Seat;
        $seat->type = $request->type;
        $seat->price = $request->price;
        $seat->save();
        return redirect()->route('seats.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $seat = Seat::find($id);        
        return view('backend.seats.show',compact('seat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seat = Seat::find($id);
        return view('backend.seats.edit',compact('seat'));
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
         $request->validate([
            
            'type'=>'required',
            'price'=>'required'
    
        ]);
         $seat =Seat::find($id);
        $seat->type = $request->type;
        $seat->price = $request->price;
        $seat->save();
        return redirect()->route('seats.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $seat = Seat::find($id);
        $seat->delete();
        return redirect()->route('seats.index');
    }
}
