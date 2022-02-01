<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use GuzzleHttp\Psr7\Request;

use Illuminate\Support\Facades\Route;

Auth::routes();
//مسار الرئيسية
Route::get('/', function () {
    return view('front-end-theme/index');
});

//لوحة التحكم
Route::get('admin/controlpanel', [App\Http\Controllers\ControlPanel_Controller::class, 'show'])->name('controlpanel');
Route::get('admin/doc_mshm', [App\Http\Controllers\docController::class, 'index'])->name('doc_mshm');
Route::get('admin/theme/dashboard', [App\Http\Controllers\Dashboard_Controller::class, 'index'])->name('dashboard');
Route::get('admin/config/index', [App\Http\Controllers\ControlPanel_Controller::class, 'configration'])->name('configration');



Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
    * مسارات الترجمة
    */
    Route::group(['prefix' => 'translation'], function() {
            Route::get('/', 'TranslationController@index')->name('translation.index');
            Route::get('/{translation}/edit', 'TranslationController@edit')->name('translation.edit');
            Route::patch('/{translation}/update', 'TranslationController@update')->name('translation.update');
            
    });
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
    * مسارات الأشتراك في القائمة البريدية
    */
    Route::group(['prefix' => 'subscribe'], function() {
            Route::get('/create', 'SubscribeController@subscribe_create')->name('subscribe.create');
            Route::post('/create', 'SubscribeController@subscribe_store')->name('subscribe.store');
            
    });
});


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
    * مسارات طلب نسخة تجريبية
    */
    Route::group(['prefix' => 'form_create'], function() {
            Route::get('/', 'OrderController@form_create')->name('form_create.create');
            Route::post('/', 'OrderController@form_store_1')->name('form_create.store');

    });
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
    * مسارات ساعات الذروة
    */
    Route::group(['prefix' => 'Rush_Hours'], function() {
            Route::get('/', 'Rush_HoursController@index')->name('Rush_Hours.index');
            Route::get('/create', 'Rush_HoursController@create')->name('Rush_Hours.create');
            Route::post('/create', 'Rush_HoursController@store')->name('Rush_Hours.store');
            Route::get('/{Rush_Hours}/show', 'Rush_HoursController@show')->name('Rush_Hours.show');
            Route::get('/{Rush_Hours}/edit', 'Rush_HoursController@edit')->name('Rush_Hours.edit');
            Route::patch('/{Rush_Hours}/update', 'Rush_HoursController@update')->name('Rush_Hours.update');
            Route::delete('/{Rush_Hours}/delete', 'Rush_HoursController@destroy')->name('Rush_Hours.destroy');
    });
});


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
    * مسارات  الفرونت أند
    */
    Route::group(['prefix' => 'front_end'], function() {
            Route::get('/', 'HomeController@index')->name('front_end.index');
            // Route::get('/create', 'HomeController@create')->name('front_ends.create');
            // Route::post('/create', 'HomeController@store')->name('front_ends.store');
            // Route::get('/{front_end}/show', 'HomeController@show')->name('front_ends.show');
            // Route::get('/{front_end}/edit', 'HomeController@edit')->name('front_ends.edit');
            // Route::patch('/{front_end}/update', 'HomeController@update')->name('front_ends.update');
            // Route::delete('/{front_end}/delete', 'HomeController@destroy')->name('front_ends.destroy');
    });
});


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
    * مسارات الرسائل
    */
    Route::group(['prefix' => 'sms'], function() {
            Route::get('/', 'Sms_Controller@index')->name('sms.index');     
    });
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
    * مسارات العملاء
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
    * مسارات الحجوزات
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
    * مسارات التصنيفات
    */
    Route::group(['prefix' => 'categories'], function() {
            Route::get('/', 'CategoryController@index')->name('categories.index');
            Route::get('/create', 'CategoryController@create')->name('categories.create');
            Route::post('/create', 'CategoryController@store')->name('categories.store');
            Route::get('/{category_id}/show', 'CategoryController@show')->name('categories.show');
            Route::get('/{category_id}/edit', 'CategoryController@edit')->name('categories.edit');
            Route::patch('/{category_id}/update', 'CategoryController@update')->name('categories.update');
            Route::delete('/{category_id}/delete', 'CategoryController@destroy')->name('categories.destroy');
    });
});


Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
    * مسارات الغرف
    */
    Route::group(['prefix' => 'rooms'], function() {
            Route::get('/', 'RoomController@index')->name('rooms.index');
            Route::get('/create', 'RoomController@create')->name('rooms.create');
            Route::post('/create', 'RoomController@store')->name('rooms.store');
            Route::get('/{room}/show', 'RoomController@show')->name('rooms.show');
            Route::get('/{room}/edit', 'RoomController@edit')->name('rooms.edit');
            Route::patch('/{room}/update', 'RoomController@update')->name('rooms.update');
            Route::delete('/{room}/delete', 'RoomController@destroy')->name('rooms.destroy');
    });
});




