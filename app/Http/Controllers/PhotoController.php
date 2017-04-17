<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Routes;
use App\photo;
use App\location;
use App\routeiteneraries;
use App\Stops;
class PhotoController extends Controller
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
        $photo =Photo::all();
        $stops =Stops::all();
        $setup_location =location::all();
        return View('pages.generalsetup.route')->with('Photo', $photo)->with('Routes', $routes)->with('routeiteneraries', $route_iteneraries)->with('Stops', $stops)->with('location', $setup_location);
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
        $photo = new photo;
        $photo ->sr_id =$request->sr_id;
        $photo ->rp_image =$request->rp_image;
        $photo ->rp_image_desc =$request->rp_image_desc;
        $photo ->remarks =$request->remarks;
        $photo->save();
        return redirect()->route('photo.index');
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
        $photo = photo:: findOrFail($id);
        return view('pages.editgeneralsetup.edititeneraries', compact('photo'));
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
        $photo = photo:: findOrFail($id);
        $photo ->sr_id =$request->sr_id;
        $photo ->rp_image =$request->rp_image;
        $photo ->rp_image_desc =$request->rp_image_desc;
        $photo ->remarks =$request->remarks;
        $photo->save();
        return redirect()->route('photo.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo = photo::findOrFail($id);
        $photo->delete();
        return redirect()->route('photo.index');
    }
}
