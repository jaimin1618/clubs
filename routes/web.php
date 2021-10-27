<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ContactController;

// HOME ROUTES
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('clubs/{id}', [HomeController::class, 'get_data'])->name('index.show');

// AUTH ROUTES
Auth::routes();

// EVENT ROUTES
Route::get('events', [EventsController::class, 'index'])->name('events');


// CONTACT ROUTES
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'create'])->name('contact.store');
