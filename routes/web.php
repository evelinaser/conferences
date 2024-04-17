<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \App\Http\Controllers\ConferenceController;
use App\Http\Controllers\AuthController;


Route::get('/', static function () {
    return view('welcome');
});
Route::get('/contact', static function () {
    return 'contact';
})->name(name: 'home.contact');


Route::resource('conferences', ConferenceController::class);
//Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
//Route::post('login', [AuthController::class, 'login']);
//Route::post('logout', [AuthController::class, 'logout'])->name('logout');

//Route::get('/', [HomeController::class, 'index'])->name('home.index');

//Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');



// User login view display
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');

// User login form submission and authentication processing
Route::post('login', [AuthController::class, 'login']);

// User logout processing
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Display list of conferences
Route::get('conferences', [ConferenceController::class, 'index'])->name('conferences.index');

// Display the conference creation form
Route::get('conferences/create', [ConferenceController::class, 'create'])->name('conferences.create');

// Process the conference creation form
Route::post('conferences', [ConferenceController::class, 'store'])->name('conferences.store');

// Display the conference edit form
Route::get('conferences/{conference}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');

// Process the conference edit form
Route::put('conferences/{conference}', [ConferenceController::class, 'update'])->name('conferences.update');

// Process the conference delete operation
Route::delete('conferences/{conference}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');

