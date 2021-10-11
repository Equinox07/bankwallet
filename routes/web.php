<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutingController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('pages-logout', [RoutingController::class,'logout']);
    Route::get('/', [RoutingController::class,'index']);
    Route::get('/account/open', [RoutingController::class,'openAccount']);
    Route::get('{first}/{second}/{third}', [RoutingController::class,'thirdLevel']);
    Route::get('{first}/{second}', [RoutingController::class,'secondLevel']);
    Route::get('{any}', [RoutingController::class,'root']);
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
