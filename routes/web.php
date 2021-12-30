<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Admin\ManageCategoryController;
use Illuminate\Http\Request;

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

//Authentication routes
Auth::routes(['verify' => true]);

//Email verification routes
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

//Search route
Route::get('/search_results', [Homecontroller::class, 'search'])->name('ad-search');

//logged in users route
Route::middleware(['auth'])->group(function () {
    Route::get('/post-ads', [CategoryController::class, 'create'])->name('ad.create');
    Route::post('/save',  [CategoryController::class, 'store'])->middleware('verified')->name('ad.store');
    Route::put('/update',  [CategoryController::class, 'update'])->middleware('verified')->name('ad.update');
    Route::get('/ads/{ad}/edit',  [CategoryController::class, 'store'])->middleware('verified')->name('ad.edit');
    Route::delete('/ads/{ads}', [CategoryController::class, 'delete'])->middleware('verified')->name('ad.destroy');
    Route::resource('account', ProfileController::class);
});
//Admin routes
Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('admin_category', ManageCategoryController::class);
});

Route::get('/{category_slug}', [CategoryController::class, 'index'])->name('category.name');
Route::get('/{category_slug}/{slug}', [CategoryController::class, 'show'])->name('ad.details');
