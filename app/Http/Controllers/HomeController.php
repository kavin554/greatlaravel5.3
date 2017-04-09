<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function preferenceSetup()
    {
        return view('pages.preference_setup');
    }



    public function country()
    {
        return view('pages.generalsetup.country');
    }
    public function embassy()
    {
        return view('pages.generalsetup.embassy');
    }
    public function placetype()
    {
        return view('pages.generalsetup.place_type');
    }
    public function location()
    {
        return view('pages.generalsetup.location');
    }
    public function route()
    {
        return view('pages.generalsetup.route');
    }
    public function weatherstation()
    {
        return view('pages.generalsetup.weather_station');
    }
    public function incidenttype()
    {
        return view('pages.generalsetup.incident_type');
    }
    public function pushnotification()
    {
        return view('pages.generalsetup.push_notification');
    }
    public function alertnotification()
    {
        return view('pages.generalsetup.alert_notification');
    }


    public function registration()
    {
        return view('pages.transaction.registration');
    }
    public function disperse()
    {
        return view('pages.transaction.disperse');
    }
    public function weather()
    {
        return view('pages.transaction.weather');
    }
    public function weather_synopsis()
    {
        return view('pages.transaction.weather_synopsis');
    }




    public function alertmap()
    {
        return view('pages.reports.alert_map');
    }
    public function incidentreport()
    {
        return view('pages.reports.incident_report');
    }
    public function radarembassy()
    {
        return view('pages.reports.radar_embassy');
    }
    public function radarpolice()
    {
        return view('pages.reports.radar_police');
    }
    public function routedensity()
    {
        return view('pages.reports.route_density');
    }


}
