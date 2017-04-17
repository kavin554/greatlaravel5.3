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
Route::get('/pages/preference_setup', 'HomeController@preferenceSetup');

/** General Setup*/

// Routes for country
Route::group(['middleware' => ['web']], function()
{
    Route::resource('country','countryController');
});

// Routes for Embassy
Route::group(['middleware' => ['web']], function()
{
    Route::resource('embassy','embassyController');
});

// Routes for Place Type
Route::group(['middleware' => ['web']], function()
{
    Route::resource('place','placeController');
});

// Routes for Location
Route::group(['middleware' => ['web']], function()
{
    Route::resource('location','locationController');
});

// Routes for Incident
Route::group(['middleware' => ['web']], function()
{
    Route::resource('incident','incidentController');
});

// Routes for Route
Route::group(['middleware' => ['web']], function()
{
    Route::resource('routes','RoutesController');
});

// Routes for Itineraries
Route::group(['middleware' => ['web']], function()
{
    Route::resource('iteneraries','ItenerariesController');
});

// Routes for Photo
Route::group(['middleware' => ['web']], function()
{
    Route::resource('photo','PhotoController');
});

// Routes for stops
Route::group(['middleware' => ['web']], function()
{
    Route::resource('stops','StopsController');
});

// Routes for Push Notification
Route::group(['middleware' => ['web']], function()
{
    Route::resource('PushNotification','PushNotificationController');
});

// Routes for Alert Notification
Route::group(['middleware' => ['web']], function()
{
    Route::resource('AlertNotification','AlertNotificationController');
});




// Routes for Location
Route::group(['middleware' => ['web']], function()
{
    Route::resource('registration','registrationController');
});

// Routes for Disperse
Route::group(['middleware' => ['web']], function()
{
    Route::resource('disperse','alertController');
});

// Routes for Weather
Route::group(['middleware' => ['web']], function()
{
    Route::resource('weather','weatherController');
});

// Routes for Synopsis
Route::group(['middleware' => ['web']], function()
{
    Route::resource('synopsis','synopsisController');
});




Route::get('/pages/reports/alert_map', 'HomeController@alertmap');
Route::get('/pages/reports/incident_report', 'HomeController@incidentreport');
Route::get('/pages/reports/radar_embassy', 'HomeController@radarembassy');
Route::get('/pages/reports/radar_police', 'HomeController@radarpolice');
Route::get('/pages/reports/route_density', 'HomeController@routedensity');


Auth::routes();

Route::get('/home', 'HomeController@index');
