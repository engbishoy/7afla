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

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:dashboard'], function () {

Route::group(['prefix' => 'profiles', 'as' => 'profile.'], function () {

    //the grouped operations (declare them before resource routes to avoid conflicts)
    Route::delete('delete-many', [Modules\BusinessProfile\Http\Controllers\ProfileController::class, 'destroyMany'])
        ->name('destroy.many')
        ->middleware('can:profile.actions.delete');


    Route::get('ajax/datatable', ProfileDatatableController::class)
        ->name('datatable')
        ->middleware('can:profile.actions.view');

        

    Route::get('ajax/datatable/{status}', ProfileStatusDatatableController::class)
    ->name('status.datatable')
    ->middleware('can:profile.actions.view');

    Route::get('/', [Modules\BusinessProfile\Http\Controllers\ProfileController::class, 'index'])
        ->name('index')
        ->middleware('can:profile.actions.view');


    Route::post('/', [Modules\BusinessProfile\Http\Controllers\ProfileController::class, 'store'])
        ->name('store')
        ->middleware('can:profile.actions.add');


    Route::get('create', [Modules\BusinessProfile\Http\Controllers\ProfileController::class, 'create'])
        ->name('create')
        ->middleware('can:profile.actions.add');

    Route::put('{profile}', [Modules\BusinessProfile\Http\Controllers\ProfileController::class, 'update'])
        ->name('update')
        ->middleware('can:profile.actions.edit');

    Route::get('{profile}/edit', [Modules\BusinessProfile\Http\Controllers\ProfileController::class, 'edit'])
        ->name('edit')
        ->middleware('can:profile.actions.edit');

    Route::delete('{profile}', [Modules\BusinessProfile\Http\Controllers\ProfileController::class, 'destroy'])
        ->name('destroy')
        ->middleware('can:profile.actions.delete');

        // active customer

        Route::put('/active/{profile}', [Modules\BusinessProfile\Http\Controllers\ProfileController::class, 'active'])
        ->name('active')
        ->middleware('can:profile.actions.control');



        //block customer
        Route::put('/block/{profile}', [Modules\BusinessProfile\Http\Controllers\ProfileController::class, 'block'])
        ->name('block')
        ->middleware('can:Profile.actions.control');


              // trashed routes
              Route::group(['prefix' => 'trashed', 'as' => 'trashed.', 'namespace' => 'Trashed'], function () {
                //the grouped operations (declare them before resource routes to avoid conflicts)
                Route::delete('/delete-many', [Modules\BusinessProfile\Http\Controllers\Trashed\ProfileTrashedController::class, 'destroyMany'])
                    ->name('destroy.many')
                    ->middleware('can:profile.actions.hard_delete');
    
                Route::post('/restore-many', [Modules\BusinessProfile\Http\Controllers\Trashed\ProfileTrashedController::class, 'restoreMany'])
                    ->name('restore.many')
                    ->middleware('can:profile.actions.restore');
    
                // trashed resource operation
                Route::delete('/{profile}', [Modules\BusinessProfile\Http\Controllers\Trashed\ProfileTrashedController::class, 'destroy'])
                    ->name('destroy')
                    ->middleware('can:profile.actions.hard_delete');
    
                Route::post('/{profile}', [Modules\BusinessProfile\Http\Controllers\Trashed\ProfileTrashedController::class, 'restore'])
                    ->name('restore')
                    ->middleware('can:profile.actions.restore');
    
                Route::get('/ajax/datatable', ProfileTrashedDataTableController::class)
                    ->name('datatable')
                    ->middleware('can:profile.actions.view_trash');
            });
});

});
    
Route::post('/upload/photos', [Modules\BusinessProfile\Http\Controllers\ProfileController::class, 'upload_photos'])
->name('gallary.upload_photos');

Route::delete('/delete/photos',[Modules\BusinessProfile\Http\Controllers\ProfileController::class, 'delete_photos'])
->name('gallary.delete_photos'); 


Route::get('/photos/get', [Modules\BusinessProfile\Http\Controllers\ProfileController::class, 'get_photos'])
->name('gallary.get_photos');
