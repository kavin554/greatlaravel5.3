<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\synopsis;
use App\weather;


class synopsisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $synopsis =synopsis::all();
        $weather_data =weather::all();

        return view('pages.transaction.weather_synopsis')->with ('synopsis', $synopsis)->with ('weather', $weather_data);
    }

    /**
     * Show the form for creating a new resource.s
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
        $synopsis = new synopsis;
        $synopsis ->wd_id =$request->wd_id;
        $synopsis ->nwp_a =$request->nwp_a;
        $synopsis ->nwp_b =$request->nwp_b;
        $synopsis ->nwp_c =$request->nwp_c;
        $synopsis ->nwp_note =$request->nwp_note;
        $synopsis ->cc =$request->cc;
        $synopsis ->hhk =$request->hhk;
        $synopsis ->hha =$request->hha;
        $synopsis ->imp_1 =$request->imp_1;
        $synopsis ->imp_2 =$request->imp_2;
        $synopsis ->note =$request->note;
        $synopsis ->entry_data =$request->entry_data;
        $synopsis ->remarks =$request->remarks;
        $synopsis->save();
        return redirect()->route('synopsis.index');
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
        $synopsis = synopsis::findOrFail($id);
        return view('pages.edittransaction.editsyynopsis', compact('synopsis'));
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
        $synopsis = synopsis:: findOrFail($id);
        $synopsis ->wd_id =$request->wd_id;
        $synopsis ->nwp_a =$request->nwp_a;
        $synopsis ->nwp_b =$request->nwp_b;
        $synopsis ->nwp_c =$request->nwp_c;
        $synopsis ->nwp_note =$request->nwp_note;
        $synopsis ->cc =$request->cc;
        $synopsis ->hhk =$request->hhk;
        $synopsis ->hha =$request->hha;
        $synopsis ->imp_1 =$request->imp_1;
        $synopsis ->imp_2 =$request->imp_2;
        $synopsis ->note =$request->note;
        $synopsis ->entry_data =$request->entry_data;
        $synopsis ->remarks =$request->remarks;
        $synopsis->save();
        return redirect()->route('synopsis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $synopsis = synopsis::findOrFail($id);
        $synopsis->delete();
        return redirect()->route('synopsis.index');
    }
}
