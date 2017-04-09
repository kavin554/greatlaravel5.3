<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Routes;
use App\Stops;
use App\routeiteneraries;
use App\Http\Requests;

class StopsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Routes::all();
        $route_iteneraries = routeiteneraries::all();
        $stops = Stops::all();
        return View('pages.generalsetup.route')->with('Routes', $routes)->with('routeiteneraries', $route_iteneraries)->with('Stops', $stops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $stops = new Stops;
        $stops ->days =$request->days;
        $stops ->Stop_no =$request->stops;
        $stops ->latitude =$request->latitude;
        $stops ->longitude =$request->longitude;
        $stops ->altitude =$request->altitude;
        $stops ->remarks =$request->remarks;
        $stops->save();
        return redirect()->route('iteneraries.index');
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
        $stops = Stops:: findOrFail($id);
        return view('pages.editgeneralsetup.editstops', compact('stops'));
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
        //update data
        $stops = Stops:: findOrFail($id);
        $stops ->days =$request->days;
        $stops ->Stop_no =$request->stops;
        $stops ->latitude =$request->latitude;
        $stops ->longitude =$request->longitude;
        $stops ->altitude =$request->altitude;
        $stops ->remarks =$request->remarks;
        $stops->save();
        return redirect()->route('routes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stops = Stops::findOrFail($id);
        $stops->delete();
        return redirect()->route('stops.index');
    }
}
