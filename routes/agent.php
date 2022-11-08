<?php

use App\Http\Controllers\AgentAuthController;
use App\Http\Controllers\AgentDashboard;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function (){
        Route::get('login' , [AgentAuthController::class , 'getlogin'])->name('agent.get.login');
        Route::post('login' , [AgentAuthController::class , 'login'])->name('agent.login');

        Route::middleware('auth')->prefix('agent')->name('agent.')->group(function(){
            Route::get('dashboard' ,  [AgentDashboard::class ,  'index'])->name('dashboard');
        });
    });


