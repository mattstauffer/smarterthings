<?php

Route::get('/', function () {
    $latest = \App\DeviceHandler::latest()->limit(5)->get();
    $manufacturers = \App\Manufacturer::orderBy('name')->get();
    return view('welcome')->with('latest', $latest)->with('manufacturers', $manufacturers);
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('search', 'SearchController')->name('search');

Route::group(['as' => 'manufacturers.', 'prefix' => 'manufacturers'], function () {
    Route::get('{manufacturer}', 'ManufacturerController@show')->name('show');

    Route::group(['as' => 'devices.', 'prefix' => '{manufacturer}'], function () {
        Route::get('{device}', 'DeviceController@show')->name('show');

        Route::group(['as' => 'handlers.', 'prefix' => '{device}/handlers'], function () {
            Route::get('{handler}', 'DeviceHandlerController@show')->name('show');
        });
    });
});
