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

Route::get('/categories', 'CategoryController@index');
Route::get('/categories/new', 'CategoryController@create');
Route::post('/categories', 'CategoryController@store');
Route::get('/categories/delete/{id}', 'CategoryController@destroy');

Route::get('/cities', 'CityController@index');
Route::get('/cities/new', 'CityController@create');
Route::post('/cities', 'CityController@store');
Route::get('/cities/delete/{id}', 'CityController@destroy');

Route::get('/citizens', 'CitizenController@index');
Route::get('/citizens/new', 'CitizenController@create');
Route::post('/citizens', 'CitizenController@store');
Route::get('/citizens/delete/{id}', 'CitizenController@destroy');

Route::get('/ferryPorts', 'FerryPortController@index');
Route::get('/ferryPorts/new', 'FerryPortController@create');
Route::post('/ferryPorts', 'FerryPortController@store');
Route::get('/ferryPorts/delete/{id}', 'FerryPortController@destroy');

Route::get('/ferryLines', 'FerryLineController@index');
Route::get('/ferryLines/new', 'FerryLineController@create');
Route::post('/ferryLines', 'FerryLineController@store');
Route::get('/ferryLines/delete/{id}', 'FerryLineController@destroy');

Route::get('/prepaidTickets', 'PrepaidTicketController@index');
Route::get('/prepaidTickets/new', 'PrepaidTicketController@create');
Route::post('/prepaidTickets', 'PrepaidTicketController@store');
Route::get('/prepaidTickets/delete/{id}', 'PrepaidTicketController@destroy');




