<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Http\Controllers\ConferenceController;



Route::get('/', static function () {
    return view('welcome');
});
Route::get('/contact', static function () {
    return 'contact';
})->name(name: 'home.contact');

Route::resource('conferences', ConferenceController::class);


//Route::get('/', [HomeController::class, 'index'])->name('home.index');

//Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
