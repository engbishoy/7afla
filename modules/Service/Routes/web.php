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
    Route::group(['prefix' => 'service', 'as' => 'service.'], function(){

        //the grouped operations (declare them before resource routes to avoid conflicts)
        Route::delete('delete-many', [Modules\Service\Http\Controllers\ServiceController::class, 'destroyMany'])
        ->name('destroy.many')
        ->middleware('can:service.actions.delete');

        Route::get('ajax/datatable', ServiceDatatableController::class)
            ->name('datatable')
            ->middleware('can:service.actions.view');

        //Model Resources routes
        //didn't use resource to have the ability to attach permission middleware to each route
        // avoid using middlewares inside of controllers keep this structure maintained
        Route::get('/',[Modules\Service\Http\Controllers\ServiceController::class, 'index'])
            ->name('index')
            ->middleware('can:service.actions.view');

        Route::post('/',[Modules\Service\Http\Controllers\ServiceController::class, 'store'])
            ->name('store')
            ->middleware('can:service.actions.add');

        Route::get('create',[Modules\Service\Http\Controllers\ServiceController::class, 'create'])
            ->name('create')
            ->middleware('can:service.actions.add');

        Route::put('{service}',[Modules\Service\Http\Controllers\ServiceController::class, 'update'])
            ->name('update')
            ->middleware('can:service.actions.edit');

        Route::get('{service}/edit',[Modules\Service\Http\Controllers\ServiceController::class, 'edit'])
            ->name('edit')
            ->middleware('can:service.actions.edit');

        Route::delete('{service}',[Modules\Service\Http\Controllers\ServiceController::class, 'destroy'])
            ->name('destroy')
            ->middleware('can:service.actions.delete');
     
           
        // trashed routes
        Route::group(['prefix' => 'trashed', 'as' => 'trashed.', 'namespace' => 'Trashed'], function(){
            //the grouped operations (declare them before resource routes to avoid conflicts)
            Route::delete('/delete-many', [Modules\Service\Http\Controllers\Trashed\ServiceTrashedController::class, 'destroyMany'])
                ->name('destroy.many')
                ->middleware('can:service.actions.hard_delete');

            Route::post('/restore-many', [Modules\Service\Http\Controllers\Trashed\ServiceTrashedController::class, 'restoreMany'])
                ->name('restore.many')
                ->middleware('can:service.actions.restore');

            // trashed resource operation
            Route::delete('/{service}', [Modules\Service\Http\Controllers\Trashed\ServiceTrashedController::class, 'destroy'])
                ->name('destroy')
                ->middleware('can:service.actions.hard_delete');

            Route::post('/{service}', [Modules\Service\Http\Controllers\Trashed\ServiceTrashedController::class, 'restore'])
                ->name('restore')
                ->middleware('can:service.actions.restore');



            Route::get('/ajax/datatable', ServiceTrashedDataTableController::class)
                ->name('datatable')
                ->middleware('can:service.actions.view_trash');
        });

    });


});

