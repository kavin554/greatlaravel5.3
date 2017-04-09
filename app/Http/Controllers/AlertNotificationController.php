<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\AlertNotification;

class AlertNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alert_notification = AlertNotification::all();
        return view('pages.generalsetup.alert_notification', ['AlertNotification' => $alert_notification]);
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
        $alert_notification = new AlertNotification;
        $alert_notification ->an_title =$request->name;
        $alert_notification ->an_desc =$request->desc;
        $alert_notification ->an_date =$request->pnDate;
        $alert_notification ->an_imei =$request->imei;
        $alert_notification ->an_mobile_number =$request->mobile;
        $alert_notification ->latitude =$request->lat;
        $alert_notification ->longitude =$request->lon;
        $alert_notification ->altitude =$request->alt;
        $alert_notification ->image_path =$request->image;
        $alert_notification ->remarks =$request->remarks;
        $alert_notification->save();
        return redirect()->route('AlertNotification.index');
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
        $alert_notification = AlertNotification::findOrFail($id);
        return view('pages.editgeneralsetup.editalertnotification', compact('alert_notification'));
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
        $alert_notification = AlertNotification:: findOrFail($id);
        $alert_notification ->an_title =$request->name;
        $alert_notification ->an_desc =$request->desc;
        $alert_notification ->an_date =$request->pnDate;
        $alert_notification ->an_imei =$request->imei;
        $alert_notification ->an_mobile_number =$request->mobile;
        $alert_notification ->latitude =$request->lat;
        $alert_notification ->longitude =$request->lon;
        $alert_notification ->altitude =$request->alt;
        $alert_notification ->image_path =$request->image;
        $alert_notification ->remarks =$request->remarks;
        $alert_notification->save();
        return redirect()->route ('AlertNotification.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $alert_notification = AlertNotification::findOrFail($id);
        $alert_notification->delete();
        return redirect()->route('AlertNotification.index');
    }

}
