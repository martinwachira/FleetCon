<?php

use Illuminate\Support\Facades\Route;

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

Route::get('admin', function () {
    return view('admin');
});

Auth::routes();

// ! route to get the first step of adding the truck. 

Route::get('addHorse', 'TruckController@addHorse')->middleware('auth');

// ! route to post horse data. 

Route::post('/postHorseData', 'TruckController@postHorseData')->middleware('auth');

// ! route to post trailer data. 
Route::post('/postTrailerData', 'TruckController@postAddTrailerData')->middleware('auth');

// ! route to get trailer. 
Route::get('addTrailer', 'TruckController@gettingAddTrailer')->middleware('auth');

// ! posting financial data. 

Route::post('/postFinancialData', 'TruckController@postFinancial')->middleware('auth');

// ! route to get all the trucks. 

Route::resource('trucks', 'TruckController')->middleware('auth');

// ! route to get the editing of a truck. 

Route::get('/editTruck/{id}', 'TruckController@gettingEditPage')->middleware('auth');

// ! updating truck. 

Route::post('/updateTruck/{id}', 'TruckController@updateTruck')->middleware('auth');

// ! route to delete truck. 
Route::post('deleteTruck', 'TruckController@destroy')->middleware('auth');


// ! route to delete a driver
Route::post('deleteDriver', 'DriverController@destroy')->middleware('auth');

// ! route to delete a site
Route::post('deleteSite', 'SiteController@destroy')->middleware('auth');

// ! route to delete a site
Route::post('deleteRoute', 'RouteController@destroy')->middleware('auth');

Route::get('/main', function () {
    return view('dashboard/main');
});

Route::get('/add-driver', function () {
    return view('driver/create');
});

Route::get('drivers', function () {
    return view('driver/view');
});

// ! route to get the form to add a route. 

Route::get('/add-route', 'RouteController@addRoute')->middleware('auth');

Route::get('routes', function () {
    return view('route/view');
});

Route::get('/add-site', function () {
    return view('site/create');
});

Route::get('sites', function () {
    return view('site/view');
});

// Routes here
Route::resource('/drivers', 'DriverController')->middleware('auth');
Route::post('add-driver', 'DriverController@store')->middleware('auth');

Route::resource('/routes', 'RouteController')->middleware('auth');
Route::post('add-route', 'RouteController@store')->middleware('auth');
Route::get('getSites', 'RouteController@getSites')->middleware('auth');


Route::resource('/sites', 'SiteController')->middleware('auth');
Route::post('add-site', 'SiteController@store')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

// ! Routes to the Reports. 

Route::get('driver_performance', function () {
    return view('Reports/driver_perfomance');
});

Route::get('fuel_usage', function () {
    return view('Reports/fuel_usage');
});

Route::get('route_profitability', function () {
    return view('Reports/route_profitability');
});

Route::get('truck_availability', function () {
    return view('Reports/truck_availability');
});

Route::get('truck_revenue', function () {
    return view('Reports/truck_revenue');
});
Route::get('route_revenue', function () {
    return view('Reports/route_revenue');
});
