<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Routes;
use App\routeiteneraries;
use App\Stops;
use Illuminate\Routing\Route;

class RoutesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $routes = Routes::all();
        $route_iteneraries =routeiteneraries::all();
        $stops =Stops::all();
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
        $routes = new Routes;
        $routes ->region =$request->region;
        $routes ->sr_name =$request->name;
        $routes ->sr_level =$request->level;
        $routes ->no_days =$request->noDays;
        $routes ->season =$request->season;
        $routes ->total_distance =$request->total_distance;
        $routes ->highest_point =$request->highest_point;
        $routes ->unit =$request->unit;
        $routes ->start_latitude =$request->start_latitude;
        $routes ->start_longitude =$request->start_longitude;
        $routes ->start_altitude =$request->start_altitude;
        $routes ->end_latitude =$request->end_latitude;
        $routes ->end_longitude =$request->end_longitude;
        $routes ->end_altitude =$request->end_altitude;
        $routes ->speciality =$request->speciality;
        $routes ->resources =$request->resources;
        $routes ->remarks =$request->remarks;
        $routes->save();
        return redirect()->route('routes.index');
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
        $routes = Routes:: findOrFail($id);
        return view('pages.editgeneralsetup.editroutes', compact('routes'));
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
        $routes = Routes:: findOrFail($id);
        $routes ->region =$request->region;
        $routes ->sr_name =$request->name;
        $routes ->sr_level =$request->level;
        $routes ->no_days =$request->noDays;
        $routes ->season =$request->season;
        $routes ->total_distance =$request->total_distance;
        $routes ->highest_point =$request->highest_point;
        $routes ->unit =$request->unit;
        $routes ->start_latitude =$request->start_latitude;
        $routes ->start_longitude =$request->start_longitude;
        $routes ->start_altitude =$request->start_altitude;
        $routes ->end_latitude =$request->end_latitude;
        $routes ->end_longitude =$request->end_longitude;
        $routes ->end_altitude =$request->end_altitude;
        $routes ->speciality =$request->speciality;
        $routes ->resources =$request->resources;
        $routes ->remarks =$request->remarks;
        $routes->save();
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
        $routes = Routes::findOrFail($id);
        $routes->delete();
        return redirect()->route('routes.index');
    }
}
