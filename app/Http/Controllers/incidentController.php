<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\incident;

class incidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incident_type =incident::all();
        return view('pages.generalsetup.incident_type', ['incident_types' => $incident_type]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.generalsetup.incident_type');
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
        $incident_type = new incident;
        $incident_type ->incident_name =$request->incident_name;
        $incident_type ->type =$request->type;
        $incident_type ->image =$request->image;
        $incident_type ->remarks =$request->remarks;
        $incident_type->save();
        return redirect()->route('incident.index');
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
        $incident_type = incident::findOrFail($id);
        return view('pages.editgeneralsetup.editincident', compact('incident_type'));
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
        //create new data
        $incident_type = incident:: findOrFail($id);
        $incident_type ->incident_name =$request->incident_name;
        $incident_type ->type =$request->type;
        $incident_type ->image =$request->image;
        $incident_type ->remarks =$request->remarks;
        $incident_type->save();
        return redirect()->route('incident.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incident_type = incident::findOrFail($id);
        $incident_type->delete();
        return redirect()->route('incident.index');
    }
}
