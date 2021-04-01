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


Route::get('/c1/{c1?}', [c1Controller::class, 'show']);

Route::get('/c2/{c2?}', [c2Controller::class, 'show']);

Route::get('/c3/{c3?}', [c3Controller::class, 'show']);



