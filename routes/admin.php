<?php

use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AreaController as AdminAreaController;
use App\Http\Controllers\Admin\DashboardController;
// use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminUsersController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\AssingOrderToClientController;
use App\Http\Controllers\AttachmentsController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\SettingController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/' , [DashboardController::class , 'getIndex']);
Route::get('/switch', fn () => 'jksa')->name('switchLan');
Route::get('/pro', fn () => 'jksa')->name('profile');
Route::middleware('auth')->group(function () {

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('home', [AdminHomeController::class, 'index'])->name('home');

        // role  -----------------
        // Route::get('role/data' , [RoleController::class , 'data'])->name('roles.data');
        // Route::resource('roles' , RoleController::class);
        // Route::delete('bulk_delete', fn()=> '')->name('roles.bulk_delete');

        // Admins Data  -----------------------
        Route::get('admin/data', [AdminController::class, 'data'])->name('admins.data');
        Route::resource('admin', AdminController::class);
        Route::delete('admin/bulk_delete', fn () => '')->name('admin.bulk_delete');

        // Admins Data  -----------------------
        Route::get('user/data', [AdminUsersController::class, 'data'])->name('user.data');
        Route::resource('user', AdminUsersController::class);
        Route::delete('user/bulk_delete', fn () => '')->name('user.bulk_delete');
        Route::get('setting', [SettingController::class, 'index'])->name('setting');
        Route::post('setting', [SettingController::class, 'Store'])->name('setting.store');
    });
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {
        //  New Route Login
        Route::prefix('admin')->middleware('guest:admin')->group(function () {
            Route::get('login', [AdminAuthController::class, 'getlogin'])->name('admin.get_login');
            Route::post('login', [AdminAuthController::class, 'login'])->name('admin.login');
        });

        Route::prefix('admin')->name('admin.')->middleware('auth:admin')->group(function () {
            Route::get('role/data', [RoleController::class, 'data'])->name('roles.data');
            Route::resource('roles', RoleController::class);
            Route::delete('bulk_delete', fn () => '')->name('roles.bulk_delete');
        });
        Route::middleware('auth:admin,web')->group(function(){
             // Owners Resource
            Route::resource('owners', OwnerController::class);
            Route::resource('users', UserController::class);
            // User Controller
            Route::get('user-ajax', [UserController::class, 'data'])->name('users.data');
            // Offer Routes
            Route::resource('offers' , OfferController::class);
            Route::get('offer-ajax', [OfferController::class, 'data'])->name('offer.data');
            Route::get('offer-in-map' , [\App\Http\Controllers\MapController::class,"index"])->name('Map');
            Route::get('reports/agent-report' , [\App\Http\Controllers\ReportController::class , "agentOfferReport"])->name('report.agent');
            Route::get('reports/offer-status-report' , [\App\Http\Controllers\ReportController::class , "offerStatusReport"])->name('report.offer_status_report');
            Route::get('reports/system-users' , [\App\Http\Controllers\ReportController::class , "OfferAreaReport"])->name('report.system_usage_monthly');

            // sign Order To Client
            Route::get('offer-asing-to-client/{id}', [AssingOrderToClientController::class, 'index'])->name('asing_to_cleint');

        });

        Route::prefix('admin')->middleware('auth:admin')->group(function () {
            Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
            // Area Routes
            Route::resource('area', AdminAreaController::class);
            // Service Resource
            Route::resource('services', ServiceController::class);
            // Clients Resource
            Route::resource('clients', ClientController::class);

            // Agent Controller
            Route::resource('agent',  AgentController::class);
            Route::get('agents-ajax', [AgentController::class, 'data'])->name('agents.data');
        });

        Route::get('show_attachments/{attachment}' , [AttachmentsController::class , 'show'])->name('show_attachments');
        Route::get('download_attachments/{attachment}' ,[ AttachmentsController::class , 'download'])->name('download_attachments');
        Route::post('attachments' ,[ AttachmentsController::class , 'store'])->name('attachments.store');
    }
);
