<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Facades\Route;

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
_____________________________________front-end_________________________________________________________________
*/
Route::get('/', function () {
    return view('front-end-theme/index');
});
Route::get('front-end-theme/index', [App\Http\Controllers\HomeController::class, 'show'])->name('index');
/*
____________________________________control_panel_________________________________________________________________
*/
Route::get('admin/controlpanel', [App\Http\Controllers\ControlPanel_Controller::class, 'show'])->name('controlpanel');
Route::get('admin/doc_mshm', [App\Http\Controllers\docController::class, 'index'])->name('doc_mshm');
Route::get('admin/clients/show', [App\Http\Controllers\ClientController::class, 'show'])->name('clients');
Route::get('admin/recivation', [App\Http\Controllers\Recivation_Controller::class, 'show'])->name('recivation');



