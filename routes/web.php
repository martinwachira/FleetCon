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

Route::get('/main', function () {
    return view('dashboard/main');
});

Route::get('/add-driver', function () {
    return view('driver/create');
});

Route::get('drivers', function () {
    return view('driver/view');
});

Auth::routes();

// Routes here
Route::resource('/drivers', 'DriverController');
Route::post('add-driver', 'DriverController@store');

Route::get('/home', 'HomeController@index')->name('home');
