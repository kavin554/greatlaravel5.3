<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\PushNotification;

use App\Http\Requests;

class PushNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $push_notification = PushNotification::all();
        return view('pages.generalsetup.push_notification', ['PushNotification' => $push_notification]);
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
        $push_notification = new PushNotification;
//        $push_notification ->id =$request->id;
//        $push_notification ->pn_id =$request->pn_id;
        $push_notification ->pn_title =$request->name;
        $push_notification ->pn_desc =$request->desc;
        $push_notification ->pn_date =$request->pnDate;
        $push_notification ->imei_number =$request->imei;
        $push_notification ->mobile_number =$request->mobile;
        $push_notification ->latitude =$request->lat;
        $push_notification ->longitude =$request->lon;
        $push_notification ->altitude =$request->alt;
        $push_notification ->image_path =$request->image;
        $push_notification ->remarks =$request->remarks;
        $push_notification->save();
        return redirect()->route('PushNotification.index');
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
        $push_notification = PushNotification::findOrFail($id);
        return view('pages.editgeneralsetup.editpushnotification', compact('push_notification'));
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
        $push_notification = PushNotification:: findOrFail($id);
        $push_notification ->pn_title =$request->name;
        $push_notification ->pn_desc =$request->desc;
        $push_notification ->pn_date =$request->pnDate;
        $push_notification ->imei_number =$request->imei;
        $push_notification ->mobile_number =$request->mobile;
        $push_notification ->latitude =$request->lat;
        $push_notification ->longitude =$request->lon;
        $push_notification ->altitude =$request->alt;
        $push_notification ->image_path =$request->image;
        $push_notification ->remarks =$request->remarks;
        $push_notification->save();
        return redirect()->route ('PushNotification.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $push_notification = PushNotification::findOrFail($id);
        $push_notification->delete();
        return redirect()->route('PushNotification.index');
    }
}
