<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsletterController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/book', [PageController::class, 'book'])->name('book');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Form submissions
Route::post('/submit-reservation', [ReservationController::class, 'submit'])->name('submitReservation');
Route::post('/submit-contact-form', [ContactController::class, 'submit'])->name('submitContact');

// Menu order submission
Route::post('/place-order', [MenuController::class, 'placeOrder'])->name('placeOrder');

Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');
