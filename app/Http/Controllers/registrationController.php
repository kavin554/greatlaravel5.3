<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\registration;
use App\country;
use Image;

class registrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_registration =registration::all();
        $country = country::all();
        return view('pages.transaction.registration')->with('user_registrations', $user_registration)->with('country',$country);
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
        $user_registration = new registration;
        $user_registration ->user_name =$request->user_name;
        $user_registration ->country_id =$request->country_id;
        if($request->hasFile('image')){
            $image = $request ->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/image/' . $filename);
            Image::make($image)->resize(140, 140)->save($location);
            $user_registration->image = $filename;
        }
        $user_registration ->street =$request->street;
        $user_registration ->city =$request->city;
        $user_registration ->state =$request->state;
        $user_registration ->mobile_no =$request->mobile_no;
        $user_registration ->home_no =$request->home_no;
        $user_registration ->email_1 =$request->email_1;
        $user_registration ->email_2 =$request->email_2;
        $user_registration ->passport_no =$request->passport_no;
        $user_registration ->type =$request->type;
        $user_registration ->issue_date =$request->issue_date;
        $user_registration ->expiry_date =$request->expiry_date;
        $user_registration ->remarks =$request->remarks;
        $user_registration->save();
        return redirect()->route('registration.index');
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
        $user_registration = registration::findOrFail($id);
        return view('pages.edittransaction.editregistration_u', compact('user_registration'));


    }

    public function edits($id)
    {
        $user_registration = registration::findOrFail($id);
        return view('pages.edittransaction.editregistration_e', compact('user_registration'));
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
        $user_registration = registration:: findOrFail($id);
        $user_registration ->user_name =$request->user_name;
        $user_registration ->country_id =$request->country_id;

        if($request->hasFile('image')){
            $image = $request ->file('image');
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $location = public_path('img/image/' . $filename);
            Image::make($image)->resize(140, 140)->save($location);
            $user_registration->image = $filename;
        }
        $user_registration ->street =$request->street;
        $user_registration ->city =$request->city;
        $user_registration ->state =$request->state;
        $user_registration ->mobile_no =$request->mobile_no;
        $user_registration ->home_no =$request->home_no;
        $user_registration ->email_1 =$request->email_1;
        $user_registration ->email_2 =$request->email_2;
        $user_registration ->passport_no =$request->passport_no;
        $user_registration ->type =$request->type;
        $user_registration ->issue_date =$request->issue_date;
        $user_registration ->expiry_date =$request->expiry_date;
        $user_registration ->remarks =$request->remarks;
        $user_registration->save();
        return redirect()->route('registration.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user_registration = registration::findOrFail($id);
        $user_registration->delete();
        return redirect()->route('registration.index');
    }
}
