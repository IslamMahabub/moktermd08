<?php

use Illuminate\Support\Facades\Route;

use Mahabub\GGLink\Http\Controllers\AuthController;
use Mahabub\GGLink\Http\Controllers\PermissionsController;
use Mahabub\GGLink\Http\Controllers\ProfileController;
use Mahabub\GGLink\Http\Controllers\ReportController;
use Mahabub\GGLink\Http\Controllers\SettingsController;


/*
|--------------------------------------------------------------------------
| GGLink Routes
|--------------------------------------------------------------------------
|
| Here is where you can register gglink routes for your application
|
*/


Route::group(['prefix'=>'gglink'], function(){

    // Auth Route
    Route::get('login', [AuthController::class, 'loginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    // Profile Route
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('add-profile', [ProfileController::class, 'create'])->name('add-profile');
    Route::post('add-profile', [ProfileController::class, 'store'])->name('add-profile');
    Route::get('update-profile/{id}', [ProfileController::class, 'edit'])->name('update-profile');
    Route::post('update-profile', [ProfileController::class, 'update'])->name('update-profile');
    Route::get('delete-profile/{id}', [ProfileController::class, 'delete'])->name('update-profile');

    // Permissions Route
    Route::get('permission', [PermissionsController::class, 'index'])->name('permission');

    // Settings Route
    Route::get('settings', [SettingsController::class, 'index'])->name('settings');

    // Report Route
    Route::get('report', [ReportController::class, 'index'])->name('report');

});
