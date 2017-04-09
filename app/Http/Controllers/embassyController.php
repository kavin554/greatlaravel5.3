<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\embassy;
use App\country;

class embassyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $embassy =Embassy::all();
        $country = country::all();
        return view('pages.generalsetup.embassy')->with('Embassy', $embassy)->with('country',$country);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.generalsetup.embassy');
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
        $embassy = new embassy;
        //$embassy=$country = country::all()->country_name;
        //$embassy ->country()->associate($country);
        $embassy ->country_id =$request->country_id;
        $embassy ->location =$request->location;
        $embassy ->contact_person =$request->contact_person;
        $embassy ->position =$request->position;
        $embassy ->mobile_no =$request->mobile_no;
        $embassy ->remarks =$request->remarks;
        $embassy->save();
        return redirect()->route('embassy.index');
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
        $embassy = Embassy::findOrFail($id);
        return view('pages.editgeneralsetup.editembassy', compact('embassy'));
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
        //Update data


        $embassy = Embassy:: findOrFail($id);
        $embassy ->location =$request->location;
        $embassy ->contact_person =$request->contact_person;
        $embassy ->position =$request->position;
        $embassy ->mobile_no =$request->mobile_no;
        $embassy ->remarks =$request->remarks;
        $embassy->save();
        return redirect()->route ('embassy.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $embassy = Embassy::findOrFail($id);
        $embassy->delete();
        return redirect()->route('embassy.index');
    }
}
