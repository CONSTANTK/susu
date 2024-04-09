<?php

use Illuminate\Support\Facades\Route;

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

    Route::get('/', function () {
        return view('front.team');
    });
    Route::get('/', function () {
        return view('front.services');
    });
    //Route::get('/', [\App\Http\Controllers\Front\ServicesController::class,'index'])->name('front.services');
    //Route::get('services', [\App\Http\Controllers\Front\ServicesController::class,'services'])->name('front.services');
