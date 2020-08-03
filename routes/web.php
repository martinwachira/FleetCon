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
    return view('admin_template');
});

Route::get('admin2', function () {
    return view('dashboard.main');
});

// ! route to get the first step of adding the truck. 

Route::get('addHorse','TruckController@addHorse');

// ! route to post horse data. 

Route::post('/postHorseData','TruckController@postHorseData');



