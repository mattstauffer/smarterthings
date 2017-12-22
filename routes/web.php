<?php

Route::get('/', 'WelcomeController')->name('welcome');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('search', 'SearchController')->name('search');

Route::group(['prefix' => 'manufacturers'], function () {
    Route::get('/', 'ManufacturerController@index')->name('manufacturers.index');
    Route::get('{manufacturer}', 'ManufacturerController@show')->name('manufacturers.show');

    Route::group(['prefix' => '{manufacturer}'], function () {
        Route::get('{device}', 'DeviceController@show')->name('devices.show');

        Route::group(['prefix' => '{device}/handlers'], function () {
            Route::get('{handler}', 'DeviceHandlerController@show')->name('handlers.show');
        });
    });
});

Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'auth'], function () {
    Route::group(['as' => 'manufacturers.', 'prefix' => 'manufacturers'], function () {
        Route::get('/', 'ManufacturerController@index')->name('index');
        Route::get('create', 'ManufacturerController@create')->name('create');
        Route::post('/', 'ManufacturerController@store')->name('store');
        Route::delete('{manufacturer}', 'ManufacturerController@destroy')->name('destroy')->middleware('auth.admin');
    });

    Route::group(['as' => 'devices.', 'prefix' => 'devices'], function () {
        Route::get('/', 'DeviceController@index')->name('index');
        Route::get('create', 'DeviceController@create')->name('create');
        Route::post('/', 'DeviceController@store')->name('store');
        Route::delete('{device}', 'DeviceController@destroy')->name('destroy')->middleware('auth.admin');
    });

    Route::group(['as' => 'handlers.', 'prefix' => 'handlers'], function () {
        Route::get('/', 'DeviceHandlerController@index')->name('index');
        Route::get('create', 'DeviceHandlerController@create')->name('create');
        Route::post('/', 'DeviceHandlerController@store')->name('store');
        Route::delete('{handler}', 'DeviceHandlerController@destroy')->name('destroy')->middleware('auth.admin');
    });
});
