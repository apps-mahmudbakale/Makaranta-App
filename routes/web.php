<?php

use App\Http\Controllers\AppsController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CardsController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\ComponentsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExtensionController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\MiscellaneousController;
use App\Http\Controllers\PageLayoutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserInterfaceController;
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

// Main Page Route
Route::get('/', function (){
    return redirect()->route('admin.dashboard');
});


/* Route Dashboards */
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('users', UserController::class);
});
/* Route Dashboards */

/* Route Authentication Pages */
Route::group(['prefix' => 'auth','as' => 'auth.'], function () {
    Auth::routes();
});
/* Route Authentication Pages */