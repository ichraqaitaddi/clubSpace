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
    return view('index');
});

Route::get('/dbconn',function(){
    return view('dbconn');
});
Route::get('/clubs', function () {
    return view('index');;
    })->name('clubs');
Route::get('/events', function () {
    return view('index');
    })->name('events');
Route::get('/nous-rejoindre', function () {
    return view('index');
    })->name('nous_rejoindre');