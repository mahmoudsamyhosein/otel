<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
Auth::routes();


Route::get('/', function () {
    return view('front-end-theme/index');
});

Route::get('front-end-theme/index', [App\Http\Controllers\HomeController::class, 'show'])->name('index');

Route::get('front-end-theme/index', [App\Http\Controllers\HomeController::class, 'create'])->name('index');

Route::post('front-end-theme/index', [App\Http\Controllers\HomeController::class, 'store'])->name('index');

Route::get('front-end-theme/index', [App\Http\Controllers\HomeController::class, 'form_create'])->name('index');

Route::post('front-end-theme/index', [App\Http\Controllers\HomeController::class, 'form_store_1'])->name('index');

Route::get('admin/controlpanel', [App\Http\Controllers\ControlPanel_Controller::class, 'show'])->name('controlpanel');
Route::get('admin/doc_mshm', [App\Http\Controllers\docController::class, 'index'])->name('doc_mshm');
Route::get('admin/theme/dashboard', [App\Http\Controllers\Dashboard_Controller::class, 'index'])->name('dashboard');
Route::get('admin/config/index', [App\Http\Controllers\ControlPanel_Controller::class, 'configration'])->name('configration');


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
    * sms Routes
    */
    Route::group(['prefix' => 'sms'], function() {
            Route::get('/', 'Sms_Controller@index')->name('sms.index');     
    });
});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
    * client Routes
    */
    Route::group(['prefix' => 'guests'], function() {
            Route::get('/', 'ClientController@index')->name('clients.index');
            Route::get('/create', 'ClientController@create')->name('clients.create');
            Route::post('/create', 'ClientController@store')->name('clients.store');
            Route::get('/{guest}/show', 'ClientController@show')->name('clients.show');
            Route::get('/{guest}/edit', 'ClientController@edit')->name('clients.edit');
            Route::patch('/{guest}/update', 'ClientController@update')->name('clients.update');
            Route::delete('/{guest}/delete', 'ClientController@destroy')->name('clients.destroy');
    });
});
Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
    * bookings Routes
    */
    Route::group(['prefix' => 'bookings'], function() {
            Route::get('/', 'BookingController@index')->name('bookings.index');
            Route::get('/create', 'BookingController@create')->name('bookings.create');
            Route::post('/create', 'BookingController@store')->name('bookings.store');
            Route::get('/{booking}/show', 'BookingController@show')->name('bookings.show');
            Route::get('/{booking}/edit', 'BookingController@edit')->name('bookings.edit');
            Route::patch('/{booking}/update', 'BookingController@update')->name('bookings.update');
            Route::delete('/{booking}/delete', 'BookingController@destroy')->name('bookings.destroy');
    });
});



Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
    * category Routes
    */
    Route::group(['prefix' => 'categories'], function() {
            Route::get('/', 'CategoryController@index')->name('categories.index');
            Route::get('/create', 'CategoryController@create')->name('categories.create');
            Route::post('/create', 'CategoryController@store')->name('categories.store');
            Route::get('/{category}/show', 'CategoryController@show')->name('categories.show');
            Route::get('/{category}/edit', 'CategoryController@edit')->name('categories.edit');
            Route::patch('/{category}/update', 'CategoryController@update')->name('categories.update');
            Route::delete('/{category}/delete', 'CategoryController@destroy')->name('categories.destroy');
    });
});




