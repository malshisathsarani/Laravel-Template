<?php

use App\Http\Controllers\MemberArea\Dashboard\DashboardController;
use App\Http\Controllers\PublicArea\AboutUs\AboutUsController;
use App\Http\Controllers\PublicArea\Home\HomeController;
use Illuminate\Support\Facades\Route;

//Home
Route::get('/', [HomeController::class, 'index'])->name('home');
//About Us
Route::get('/about-us', [AboutUsController::class, 'index'])->name('about-us');



Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
