<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminFormController;
use App\Http\Controllers\AboutController;

// HOME ROUTES
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('clubs', [HomeController::class, 'get_data'])->name('index.show');
Route::get('clubs/{id}', [HomeController::class, 'club_data'])->name('index.club');
Route::get('get_club/{id}', [HomeController::class, 'show_club'])->name('index.get_club');

// AUTH ROUTES
Auth::routes(['verify' => true]);

// EVENT ROUTES
Route::get('events', [EventsController::class, 'index'])->name('events');
Route::post('events/add', [EventsController::class, 'addEvent'])->name('events.add');
Route::get('events/show', [EventsController::class, 'displayEvents'])->name('events.show');
// Route::post('events/image', [EventsController::class, 'imageUpload'])->name('events.image');

// CONTACT ROUTES
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact', [ContactController::class, 'create'])->name('contact.store');

// ADMIN FORM ROUTES
Route::get('admin/form', [AdminFormController::class, 'index'])->name('admin.form');
Route::get('admin/clubs', [AdminFormController::class, 'get_data'])->name('admin.all_clubs');

// ABOUT US ROUTES
Route::get('about',[AboutController::class,'index'])->name('about');