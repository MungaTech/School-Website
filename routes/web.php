<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\BoardingController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//Welcome
Route::get('/', [WelcomeController::class, 'index']);

//About
Route::get('/about', [AboutController::class, 'about']);

//Academics
Route::get('/academic',[AcademicController::class, 'academic']);

//Boarding
Route::get('/boarding', [BoardingController::class, 'boarding']);

Auth::routes();

Route::get('user/home', [HomeController::class, 'userHome'])->name('user.home');
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

