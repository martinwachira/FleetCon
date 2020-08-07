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


// ! route to get the first step of adding the truck. 

Route::get('addHorse','TruckController@addHorse');

// ! route to post horse data. 

Route::post('/postHorseData','TruckController@postHorseData');

// ! route to post trailer data. 
Route::post('/postTrailerData','TruckController@postAddTrailerData');

// ! route to get trailer. 
Route::get('addTrailer','TruckController@gettingAddTrailer');

// ! posting financial data. 

Route::post('/postFinancialData','TruckController@postFinancial');

// ! route to get all the trucks. 

Route::resource('trucks', 'TruckController');

// ! route to get the editing of a truck. 

Route::get('/editTruck/{id}','TruckController@gettingEditPage');

// ! updating truck. 

Route::post('/updateTruck/{id}','TruckController@updateTruck');

// ! edit driver
// Route::put('/updateDriver', 'DriverController@update');

// ! edit site
// Route::put('/updateSite', 'SiteController@update');

// ! route to delete truck. 
Route::post('deleteTruck','TruckController@destroy');


// ! route to delete a driver
Route::post('deleteDriver','DriverController@destroy');

// ! route to delete a site
Route::post('deleteSite','SiteController@destroy');

// ! route to delete a site
Route::post('deleteRoute','RouteController@destroy');

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

Route::get('/add-route','RouteController@addRoute');

Route::get('routes', function () {
    return view('route/view');
});

Route::get('/add-site', function () {
    return view('site/create');
});

Route::get('sites', function () {
    return view('site/view');
});

Auth::routes();

// Routes here
Route::resource('/drivers', 'DriverController');
Route::post('add-driver', 'DriverController@store');

Route::resource('/routes', 'RouteController');
Route::post('add-route', 'RouteController@store');
Route::get('getSites', 'RouteController@getSites');


Route::resource('/sites', 'SiteController');
Route::post('add-site', 'SiteController@store');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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