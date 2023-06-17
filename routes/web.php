<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

route::get('/sample', [\App\Http\Controllers\Sample\IndexController::class, 'show']);
route::get('/sample/{id}', [\App\Http\Controllers\Sample\IndexController::class, 'showId']);

route::get('/tweet', \App\Http\Controllers\Tweet\IndexController::class);