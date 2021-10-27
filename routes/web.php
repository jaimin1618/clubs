<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ContactController;

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

// HOME ROUTES
// Route::get('/', [HomeController::class, 'index']);

// AUTH ROUTES
Auth::routes();
// Auth::routes(['verify' => true]);
Route::get('/', [HomeController::class, 'index'])->name('index');

// EVENT ROUTES
Route::get('/events', [EventsController::class, 'index'])->name('events');


// CONTACT ROUTES
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
