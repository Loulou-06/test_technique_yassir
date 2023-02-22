<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\CabinController;
// use App\Http\Controllers\CompanyController;
// use App\Http\Controllers\CruiseShipController;
// use App\Http\Controllers\Controller;
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


// routes companies

Route::get('/companies', 'App\Http\Controllers\CompanyController@index')->name('companies.index');

Route::get('/companies/create', 'App\Http\Controllers\CompanyController@create')->name('companies.create');
Route::post('/companies/create', 'App\Http\Controllers\CompanyController@store')->name('companies.store');

Route::get('/companies/{id}', 'App\Http\Controllers\CompanyController@show')->name('companies.show');

Route::get('/companies/{id}/edit', 'App\Http\Controllers\CompanyController@edit')->name('companies.edit');
Route::put('/companies/{id}', 'App\Http\Controllers\CompanyController@update')->name('companies.update');

Route::delete('/companies/{id}', 'App\Http\Controllers\CompanyController@destroy')->name('companies.destroy');



// route CruiseShips 

Route::get('/cruiseships', 'App\Http\Controllers\CruiseShipController@index')->name('cruiseShips.index');

Route::get('/cruiseships/create', 'App\Http\Controllers\CruiseShipController@create')->name('cruiseShips.create');
Route::post('/cruiseships/create', 'App\Http\Controllers\CruiseShipController@store')->name('cruiseShips.store');

Route::get('/cruiseships/{id}', 'App\Http\Controllers\CruiseShipController@show')->name('cruiseShips.show');

Route::get('/cruiseships/{id}/edit', 'App\Http\Controllers\CruiseShipController@edit')->name('cruiseShips.edit');
Route::put('/cruiseships/{id}', 'App\Http\Controllers\CruiseShipController@update')->name('cruiseShips.update');

Route::delete('/cruiseships/{id}', 'App\Http\Controllers\CruiseShipController@destroy')->name('cruiseShips.destroy');



// route Cabins

Route::get('/cabins', 'App\Http\Controllers\CabinController@index')->name('cabins.index');

Route::get('/cabins/create', 'App\Http\Controllers\CabinController@create')->name('cabins.create');
Route::post('/cabins/create', 'App\Http\Controllers\CabinController@store')->name('cabins.store');

Route::get('/cabins/{id}', 'App\Http\Controllers\CabinController@show')->name('cabins.show');

Route::get('/cabins/{id}/edit', 'App\Http\Controllers\CabinController@edit')->name('cabins.edit');
Route::put('/cabins/{id}', 'App\Http\Controllers\CabinController@update')->name('cabins.update');

Route::delete('/cabins/{id}', 'App\Http\Controllers\CabinController@destroy')->name('cabins.destroy');
