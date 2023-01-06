<?php

use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Owenr\OwnerDashbaord;
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


Route::prefix('owners')->group(function () {
    // Auth Route
    Route::get('login' , [OwnerAuthController::class , 'index'])->name('get.login');
    Route::post('login' , [OwnerAuthController::class , 'login'])->name('owner.login');
    Route::middleware('auth:owner')->group(function () {
        Route::get('dashboard' , [OwnerDashbaord::class, 'index'])->name('owner.dashboard');
    });

});
