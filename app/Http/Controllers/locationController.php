<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\location;
use App\place;

class locationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $setup_location =location::all();
        $place_type =place::all();

        return view('pages.generalsetup.location')->with( 'setup_locations' , $setup_location)->with('place', $place_type);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('pages.generalsetup.location');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create new data
        $setup_location = new location;
        $setup_location ->pl_id =$request->pl_id;
        $setup_location ->name =$request->name;
        $setup_location ->latitude =$request->latitude;
        $setup_location ->longitude =$request->longitude;
        $setup_location ->altitude =$request->altitude;
        $setup_location ->desc =$request->desc;
        $setup_location ->remarks =$request->remarks;
        $setup_location->save();
        return redirect()->route('location.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $setup_location = location::findOrFail($id);
        return view('pages.editgeneralsetup.editlocation', compact('setup_location'));
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

        $setup_location = location:: findOrFail($id);
        $setup_location ->pl_id =$request->pl_id;
        $setup_location ->name =$request->name;
        $setup_location ->latitude =$request->latitude;
        $setup_location ->longitude =$request->longitude;
        $setup_location ->altitude =$request->altitude;
        $setup_location ->desc =$request->desc;
        $setup_location ->remarks =$request->remarks;
        $setup_location->save();
        return redirect()->route('location.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $setup_location = location::findOrFail($id);
        $setup_location->delete();
        return redirect()->route('location.index');
    }
}
