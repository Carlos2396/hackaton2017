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
    $residues = App\Residue_type::all();
    $affiliates = App\Affiliates::all();
    return view('index', compact('residues', 'affiliates'));
}) ->name('home');

Route::get('/profile', 'SessionsController@show');
Route::post('/profile', 'SessionsController@storepin');

Route::get('/map', 'PinController@show');

Route::get('/location', 'LocationController@create');
Route::post('/location', 'LocationController@store');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');

Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');