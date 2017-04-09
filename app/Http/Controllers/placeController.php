<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\place;



class placeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $place_type =place::all();
        return view('pages.generalsetup.place_type', ['place_types' => $place_type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.generalsetup.place_type');
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
        $place_type = new place;
        $place_type ->pl_id =$request->pl_id;
        $place_type ->sl_id =$request->sl_id;
        $place_type ->name =$request->name;
        $place_type ->image =$request->image;
        $place_type ->status_flag =$request->status_flag;
        $place_type ->remarks =$request->remarks;
        $place_type->save();
        return redirect()->route('place.index');
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
        $place_type = place::findOrFail($id);
        return view('pages.editgeneralsetup.editplace_type', compact('place_type'));
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
        $place_type = place:: findOrFail($id);
        $place_type ->pl_id =$request->pl_id;
        $place_type ->sl_id =$request->sl_id;
        $place_type ->name =$request->name;
        $place_type ->image =$request->image;
        $place_type ->status_flag =$request->status_flag;
        $place_type ->remarks =$request->remarks;
        $place_type->save();
        return redirect()->route('place.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place_type = place::findOrFail($id);
        $place_type->delete();
        return redirect()->route('place.index');
    }
}
