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
    return view('landing');
});

Route::get('/home', function(){
    return view('home');
});
Route::get('/profile', function(){
    return view('profile');
});
Route::get('/event', function(){
    return view('event');
});
Route::get('/news', function(){
    return view('news');
});
Route::get('/contacts', function(){
    return view('contact');
});