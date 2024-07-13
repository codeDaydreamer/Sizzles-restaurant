<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ContactController;



Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/book', [PageController::class, 'book'])->name('book');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/submit-reservation', [ReservationController::class, 'submit'])->name('submitReservation');
Route::post('/submit-contact-form', [ContactController::class, 'submit'])->name('submitContact');

