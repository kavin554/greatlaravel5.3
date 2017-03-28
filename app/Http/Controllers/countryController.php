<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\country;

class countryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country =Country::all();
        return view('pages.generalsetup.country', ['countrys' => $country]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.generalsetup.country');
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
        $country = new country;
        $country ->country_tel_code =$request->country_tel_code;
        $country ->country_name =$request->country_name;
        $country ->continent =$request->continent;
        $country ->currency_name =$request->currency_name;
        $country ->symbol =$request->symbol;
        $country ->flag =$request->flag;
        $country ->remarks =$request->remarks;
        $country->save();
        return redirect()->route('country.index');
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
        $country = Country::findOrFail($id);
        return view('pages.editgeneralsetup.editcountry', compact('country'));
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


        $country = Country:: findOrFail($id);
        $country ->country_tel_code =$request->country_tel_code;
        $country ->country_name =$request->country_name;
        $country ->continent =$request->continent;
        $country ->currency_name =$request->currency_name;
        $country ->symbol =$request->symbol;
        $country ->flag =$request->flag;
        $country ->remarks =$request->remarks;
        $country->save();
        return redirect()->route ('country.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country = Country::findOrFail($id);
        $country->delete();
        return redirect()->route('country.index');
    }
}
