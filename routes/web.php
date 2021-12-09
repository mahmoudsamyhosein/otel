<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ClientController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Html\Builder;

/*
|--------------------------------------------------------------------------
| --------------------------بسم الله الرحمن الرحيم--------------
| -------------------------- الموجهات -------------
|
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

/*
____________________________________front-end_________________________________________________________________
*/
Route::get('/', function () {
    return view('front-end-theme/index');
});
Route::get('front-end-theme/index', [App\Http\Controllers\HomeController::class, 'show'])->name('index');
Route::get('alerts/index', [App\Http\Controllers\HomeController::class, 'create'])->name('index');
Route::post('alerts/index', [App\Http\Controllers\HomeController::class, 'store'])->name('index');
Route::get('alerts/index', [App\Http\Controllers\HomeController::class, 'form_create'])->name('index');
Route::post('alerts/index', [App\Http\Controllers\HomeController::class, 'form_store_1'])->name('index');
/*
____________________________________control_panel_________________________________________________________________
*/
Route::get('admin/controlpanel', [App\Http\Controllers\ControlPanel_Controller::class, 'show'])->name('controlpanel');
Route::get('admin/doc_mshm', [App\Http\Controllers\docController::class, 'index'])->name('doc_mshm');
Route::get('admin/theme/dashboard', [App\Http\Controllers\Dashboard_Controller::class, 'index'])->name('dashboard');
Route::get('admin/sms/index', [App\Http\Controllers\Sms_Controller::class, 'index'])->name('sms');
Route::get('admin/sms/create', [App\Http\Controllers\Sms_Controller::class, 'create'])->name('create_sms');
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





