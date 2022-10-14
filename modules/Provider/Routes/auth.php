<?php

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/

use Modules\Provider\Http\Controllers\Auth\LoginController;
use Modules\Provider\Http\Controllers\Front\LocationController;

Route::group(['prefix' => 'provider','as' => 'provider.'], function () {
    Route::middleware(['guest:provider'])->group(function () {
        Route::get('login', [LoginController::class, 'show'])->name('login.show');
        Route::post('login', [LoginController::class, 'login'])->name('login');
    });

    Route::middleware(['auth:provider'])->group(function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });
});





