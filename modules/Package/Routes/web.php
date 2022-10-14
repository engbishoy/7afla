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


Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:dashboard'], function(){

    // rest of routes
    Route::group(['prefix' => 'package', 'as' => 'package.'], function(){

        //the grouped operations (declare them before resource routes to avoid conflicts)
        Route::delete('delete-many', [Modules\Package\Http\Controllers\PackageController::class, 'destroyMany'])
        ->name('destroy.many')
        ->middleware('can:package.actions.delete');

        Route::get('ajax/datatable', PackageDatatableController::class)
            ->name('datatable')
            ->middleware('can:package.actions.view');

        //Model Resources routes
        //didn't use resource to have the ability to attach permission middleware to each route
        // avoid using middlewares inside of controllers keep this structure maintained
        Route::get('/',[Modules\Package\Http\Controllers\PackageController::class, 'index'])
            ->name('index')
            ->middleware('can:package.actions.view');

        Route::post('/',[Modules\Package\Http\Controllers\PackageController::class, 'store'])
            ->name('store')
            ->middleware('can:package.actions.add');

        Route::get('create',[Modules\Package\Http\Controllers\PackageController::class, 'create'])
            ->name('create')
            ->middleware('can:package.actions.add');

        Route::put('{package}',[Modules\Package\Http\Controllers\PackageController::class, 'update'])
            ->name('update')
            ->middleware('can:package.actions.edit');

        Route::get('{package}/edit',[Modules\Package\Http\Controllers\PackageController::class, 'edit'])
            ->name('edit')
            ->middleware('can:package.actions.edit');

        Route::delete('{package}',[Modules\Package\Http\Controllers\PackageController::class, 'destroy'])
            ->name('destroy')
            ->middleware('can:package.actions.delete');
     
           
        // trashed routes
        Route::group(['prefix' => 'trashed', 'as' => 'trashed.', 'namespace' => 'Trashed'], function(){
            //the grouped operations (declare them before resource routes to avoid conflicts)
            Route::delete('/delete-many', [Modules\Package\Http\Controllers\Trashed\PackageTrashedController::class, 'destroyMany'])
                ->name('destroy.many')
                ->middleware('can:package.actions.hard_delete');

            Route::post('/restore-many', [Modules\Package\Http\Controllers\Trashed\PackageTrashedController::class, 'restoreMany'])
                ->name('restore.many')
                ->middleware('can:package.actions.restore');

            // trashed resource operation
            Route::delete('/{package}', [Modules\Package\Http\Controllers\Trashed\PackageTrashedController::class, 'destroy'])
                ->name('destroy')
                ->middleware('can:package.actions.hard_delete');

            Route::post('/{package}', [Modules\Package\Http\Controllers\Trashed\PackageTrashedController::class, 'restore'])
                ->name('restore')
                ->middleware('can:package.actions.restore');



            Route::get('/ajax/datatable', PackageTrashedDataTableController::class)
                ->name('datatable')
                ->middleware('can:package.actions.view_trash');
        });

    });


});

