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
    $latest = \App\DeviceHandler::latest()->limit(5)->get();
    $manufacturers = \App\Manufacturer::orderBy('name')->get();
    return view('welcome')->with('latest', $latest)->with('manufacturers', $manufacturers);
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('search', 'SearchController')->name('search');

Route::group(['as' => 'devicehandlers.', 'prefix' => 'device-handlers'], function () {
    Route::get('{handler}', 'DeviceHandlerController@show')->name('show');

    Route::get('{manufacturer}', 'ManufacturerDeviceHandlerController@index')->name('manufacturer.index');
    Route::get('{manufacturer}/{handler}', 'ManufacturerDeviceHandlerController@show')->name('manufacturer.show');
});


Route::group(['as' => 'manufacturers.', 'prefix' => 'manufacturers'], function () {
    Route::get('{manufacturer}', 'ManufacturerController@show')->name('show');
});
