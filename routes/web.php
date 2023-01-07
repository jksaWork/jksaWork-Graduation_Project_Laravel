<?php

use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Owenr\OwnerDashbaord;
use App\Http\Controllers\Owenr\OwnerOfferController;
use App\Http\Controllers\Owner\OwnerMapController;
use App\Http\Controllers\OwnerAuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin'  , fn() => view('layouts.admin.admin'));
// Route::get('admin' , '')
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
Route::prefix('owners')->group(function () {
    // Auth Route
    Route::get('login' , [OwnerAuthController::class , 'index'])->name('get.login');
    Route::post('login' , [OwnerAuthController::class , 'login'])->name('owner.login');
    Route::get('register' , [OwnerAuthController::class , 'getRegister'])->name('owner.register');
    Route::post('register' , [OwnerAuthController::class , 'register'])->name('owner_register');
    Route::middleware('auth:owner')->name('owner.')->group(function () {
        Route::get('dashboard' , [OwnerDashbaord::class, 'index'])->name('dashboard');
        Route::resource('offers', OwnerOfferController::class);
        Route::get('offers-ajax', [OwnerOfferController::class , 'getAjaxData'])->name('offer.ajax');
        Route::get('owner-map', [OwnerMapController::class , 'Map'])->name('map');
    });
        // Route
    });
});
