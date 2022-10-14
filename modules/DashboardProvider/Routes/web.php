<?php

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

//front dashboard provider
Route::view('/', 'provider::front.dashboard')->name('dashboard.provider');

Route::group(['prefix' => '/provider/dashboard','as' => 'dashboard.provider.','middleware' => 'auth:provider'], function () {
    //dashboard page

 
        Route::get('/services', [Modules\DashboardProvider\Http\Controllers\Profile\ProfileController::class, 'services'])
        ->name('services');

        Route::group(['prefix' => 'profiles', 'as' => 'profile.','namespace'=>'Profile'], function () {

            //the grouped operations (declare them before resource routes to avoid conflicts)
            Route::delete('delete-many', [Modules\DashboardProvider\Http\Controllers\Profile\ProfileController::class, 'destroyMany'])
                ->name('destroy.many');
        
        
            Route::get('ajax/datatable/{service}', ProfileDatatableController::class)
                ->name('datatable');
        
            Route::get('/{service}', [Modules\DashboardProvider\Http\Controllers\Profile\ProfileController::class, 'index'])
                ->name('index');
        
        
            Route::post('/{service}', [Modules\DashboardProvider\Http\Controllers\Profile\ProfileController::class, 'store'])
                ->name('store');
        
        
            Route::get('create/{service}', [Modules\DashboardProvider\Http\Controllers\Profile\ProfileController::class, 'create'])
                ->name('create');
        
            Route::put('{profile}', [Modules\DashboardProvider\Http\Controllers\Profile\ProfileController::class, 'update'])
                ->name('update');
        
            Route::get('{profile}/edit', [Modules\DashboardProvider\Http\Controllers\Profile\ProfileController::class, 'edit'])
                ->name('edit');
        
            Route::delete('{profile}', [Modules\DashboardProvider\Http\Controllers\Profile\ProfileController::class, 'destroy'])
                ->name('destroy');
        
        
        });


         // rest of routes
         Route::group(['prefix' => 'package', 'as' => 'package.','namespace'=>'Package'], function () {

        //the grouped operations (declare them before resource routes to avoid conflicts)
        Route::delete('delete-many', [Modules\DashboardProvider\Http\Controllers\Package\PackageController::class, 'destroyMany'])
        ->name('destroy.many');

        Route::get('ajax/datatable', PackageDatatableController::class)
            ->name('datatable');

        //Model Resources routes
        //didn't use resource to have the ability to attach permission middleware to each route
        // avoid using middlewares inside of controllers keep this structure maintained
        Route::get('/',[Modules\DashboardProvider\Http\Controllers\Package\PackageController::class, 'index'])
            ->name('index');

        Route::post('/',[Modules\DashboardProvider\Http\Controllers\Package\PackageController::class, 'store'])
            ->name('store');

        Route::get('create',[Modules\DashboardProvider\Http\Controllers\Package\PackageController::class, 'create'])
            ->name('create');

        Route::put('{package}',[Modules\DashboardProvider\Http\Controllers\Package\PackageController::class, 'update'])
            ->name('update');

        Route::get('{package}/edit',[Modules\DashboardProvider\Http\Controllers\Package\PackageController::class, 'edit'])
            ->name('edit');

        Route::delete('{package}',[Modules\DashboardProvider\Http\Controllers\Package\PackageController::class, 'destroy'])
            ->name('destroy');
     
    });


        Route::group(['prefix' => 'gallary', 'as' => 'gallary.','namespace'=>'Gallary'], function () {

             //the grouped operations (declare them before resource routes to avoid conflicts)
        Route::delete('delete-many', [Modules\DashboardProvider\Http\Controllers\Profile\Gallary\GallaryController::class, 'destroyMany'])
        ->name('destroy.many');

        Route::get('ajax/datatable', GallaryDatatableController::class)
            ->name('datatable');

        Route::get('/', [Modules\DashboardProvider\Http\Controllers\Profile\Gallary\GallaryController::class, 'index'])
            ->name('index');

        Route::post('/', [Modules\DashboardProvider\Http\Controllers\Profile\Gallary\GallaryController::class, 'store'])
            ->name('store');

        Route::get('create', [Modules\DashboardProvider\Http\Controllers\Profile\Gallary\GallaryController::class, 'create'])
            ->name('create');

        Route::delete('{gallary}', [Modules\DashboardProvider\Http\Controllers\Profile\Gallary\GallaryController::class, 'destroy'])
            ->name('destroy');
        });

    });


