<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('welcome');});

Route::get('/', [App\Http\Controllers\HomeController::class,'index'])->name('home');

use App\Http\Controllers\AboutController;
Route::get('about', AboutController::class)->name('about');

use App\Http\Controllers\ServicesController;
Route::get('services', ServicesController::class)->name('services');

use App\Http\Controllers\MenuController;
Route::get('menu', MenuController::class)->name('menu');

use App\Http\Controllers\TeamController;
Route::get('team', TeamController::class)->name('team');

use App\Http\Controllers\TestimonialController;
Route::get('testimonial', TestimonialController::class)->name('testimonial');

use App\Http\Controllers\ContactController;
Route::get('contact', ContactController::class)->name('contact');

use App\Http\Controllers\BookingController;
Route::get('booking', BookingController::class)->name('booking');
