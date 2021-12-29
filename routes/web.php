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
    return view('home');
})->name('home');

Route::get('/topics', function () {
    return view('topics');
})->name('topics');

Route::get('/series', function () {
    return view('series');
})->name('series');

Route::get('/larabits', function () {
    return view('larabits');
})->name('larabits');

Route::get('/discussions', function () {
    return view('discussions');
})->name('discussions');

Route::get('/podcast', function () {
    return view('podcast');
})->name('podcast'); 


