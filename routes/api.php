<?php

use App\Http\Controllers\Api\ApiAuthController;
use App\Http\Controllers\Api\ApiOnwerAuthControler;
use App\Http\Controllers\Api\ApiServiceController;
use App\Http\Controllers\Api\AreaController as ApiAreaController;
use App\Http\Controllers\AreaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('client')->group(function (){
    Route::post('register' , [ApiAuthController::class , 'regsiterClient']); #Register Client
    Route::post('login' , [ApiAuthController::class , 'loginClient']); #login Client
});



// Owners Routes Api
Route::prefix('owner')->group(function (){
    Route::post('register' , [ApiOnwerAuthControler::class , 'regsiterClient']); #Register Client
    Route::post('login' , [ApiOnwerAuthControler::class , 'loginClient']); #login Client
});

Route::get('areas' , [ApiAreaController::class , 'index']);
Route::get('services' , [ApiServiceController::class , 'index']);
