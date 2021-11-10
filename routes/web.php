<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Basecontroller;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [Homecontroller::class, 'index']);

// Route::get('/register', [Basecontroller::class, 'register'])->name('register');

// Route::post('/save', [Basecontroller::class, 'loadIn'])->name('enter');

// Route::get('/login', [Basecontroller::class, 'login'])->name('login');

// Route::post('/check', [Basecontroller::class, 'check'])->name('check');

// Route::get('/logout', [Basecontroller::class, 'logout'])->name('logout');


Route::get('/product-category', [CategoryController::class, 'index'])->name('category');
Route::get('/details', [CategoryController::class, 'show'])->name('ad-details');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Authentication routes
Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/post-ads', [CategoryController::class, 'create'])->name('post-ads');
    Route::get('/profile', [Basecontroller::class, 'profile'])->name('profile');

    //Admin routes
    Route::get('/category', [AdminController::class, 'index']);
    Route::get('/post-category', [AdminController::class, 'create']);
});
