<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\routeiteneraries;
use App\Routes;
use App\Stops;
use App\location;
use App\Http\Requests;

class ItenerariesController extends Controller
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
        $setup_location =location::all();
        return View('pages.generalsetup.route')->with('Routes', $routes)->with('routeiteneraries', $route_iteneraries)->with('Stops', $stops)->with('location', $setup_location);
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
        $route_iteneraries = new routeiteneraries;
        $route_iteneraries ->day =$request->day;
        $route_iteneraries ->sr_id =$request->sr_id;
        $route_iteneraries ->start =$request->start_date;
        $route_iteneraries ->end =$request->end_date;
        $route_iteneraries ->duration_hour =$request->duration;
        $route_iteneraries ->desc =$request->desc;
        $route_iteneraries ->remarks =$request->remarks;
        $route_iteneraries->save();
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
        $route_iteneraries = routeiteneraries:: findOrFail($id);
        return view('pages.editgeneralsetup.edititeneraries', compact('route_iteneraries'));
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
        $route_iteneraries = routeiteneraries:: findOrFail($id);
        $route_iteneraries ->day =$request->day;
        $route_iteneraries ->sr_id =$request->sr_id;
        $route_iteneraries ->start =$request->start_date;
        $route_iteneraries ->end =$request->end_date;
        $route_iteneraries ->duration_hour =$request->duration;
        $route_iteneraries ->desc =$request->desc;
        $route_iteneraries ->remarks =$request->remarks;
        $route_iteneraries->save();
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
        $route_iteneraries = routeiteneraries::findOrFail($id);
        $route_iteneraries->delete();
        return redirect()->route('iteneraries.index');
    }
}
