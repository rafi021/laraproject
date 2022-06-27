<?php

use App\Http\Controllers\FrontController;
use App\Http\Controllers\UserInfoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [FrontController::class, 'home'])->name('home');

Route::get('/about-us', [FrontController::class, 'about'])->name('about');

Route::get('/contact-page', [FrontController::class, 'contact'])->name('contact');

Route::get('/service-page', [FrontController::class, 'service'])->name('service');

Route::get('/send-me-details', UserInfoController::class)->name('sendmedetails');


