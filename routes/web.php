<?php

use App\Http\Controllers\contactController;
use Illuminate\Support\Facades\Route;
use App\http\controllers\homeController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\eventsController;
use App\Http\Controllers\newsController;

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
})->name('landing');

Route::get('/home', [homeController::class, 'index'])->name('home');
Route::get('/profile', [profileController::class, 'index'])->name('profile');
Route::get('/events', [eventsController::class, 'index'])->name('events');
Route::get('/news', [newsController::class, 'index'])->name('news');
Route::get('/contacts', [contactController::class, 'index'])->name('contacts');
Route::post('/contact_out', [contactController::class, 'submit'])->name('contact_out');

// Route::get('/home', function(){
//     return view('home');
// })->name('home');

// Route::get('/profile', function(){
//     return view('profile');
// })->name('profile');

// Route::get('/event', function(){
//     return view('event');
// })->name('event');

// Route::get('/news', function(){
//     return view('news');
// })->name('news');

// Route::get('/contacts', function(){
//     return view('contacts');
// })->name('contacts');
