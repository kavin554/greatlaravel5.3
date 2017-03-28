<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/** Preference Setup*/

// Routes for country
Route::group(['middleware' => ['web']], function()
{
    Route::resource('country','countryController');
});

Route::get('/pages/preference_setup', 'HomeController@preferenceSetup');
Route::get('/pages/generalsetup/embassy_contact', 'HomeController@embassycontact');
Route::get('/pages/generalsetup/place_type', 'HomeController@placetype');
Route::get('/pages/generalsetup/location', 'HomeController@location');
Route::get('/pages/generalsetup/route', 'HomeController@route');
Route::get('/pages/generalsetup/weather_station', 'HomeController@weatherstation');
Route::get('/pages/generalsetup/incident_type', 'HomeController@incidenttype');
Route::get('/pages/generalsetup/push_notification', 'HomeController@pushnotification');
Route::get('/pages/generalsetup/alert_notification', 'HomeController@alertnotification');



Route::get('/pages/transaction/registration', 'HomeController@registration');
Route::get('/pages/transaction/weather', 'HomeController@weather');
Route::get('/pages/transaction/disperse', 'HomeController@disperse');



Route::get('/pages/reports/alert_map', 'HomeController@alertmap');
Route::get('/pages/reports/incident_report', 'HomeController@incidentreport');
Route::get('/pages/reports/radar_embassy', 'HomeController@radarembassy');
Route::get('/pages/reports/radar_police', 'HomeController@radarpolice');
Route::get('/pages/reports/route_density', 'HomeController@routedensity');


Auth::routes();

Route::get('/home', 'HomeController@index');
