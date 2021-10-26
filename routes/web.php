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
Route::get('optimize', function () {
    return \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/bio', function () {
    return view('bio');
});


Route::domain('{bio}.belezzaria.com.br')->group(function () {
    Route::get('/bio', function ($bio) {
        return view('bio');
    });
});
