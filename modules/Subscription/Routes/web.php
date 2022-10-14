<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteSubscriptionProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:dashboard'], function(){

    // rest of routes
    Route::group(['prefix' => 'subscription', 'as' => 'subscription.'], function(){

        //the grouped operations (declare them before resource routes to avoid conflicts)
        Route::delete('delete-many', [Modules\Subscription\Http\Controllers\SubscriptionController::class, 'destroyMany'])
        ->name('destroy.many')
        ->middleware('can:subscription.actions.delete');

        Route::get('ajax/datatable', SubscriptionDatatableController::class)
            ->name('datatable')
            ->middleware('can:subscription.actions.view');

        //Model Resources routes
        //didn't use resource to have the ability to attach permission middleware to each route
        // avoid using middlewares inside of controllers keep this structure maintained
        Route::get('/',[Modules\Subscription\Http\Controllers\SubscriptionController::class, 'index'])
            ->name('index')
            ->middleware('can:subscription.actions.view');

        Route::post('/',[Modules\Subscription\Http\Controllers\SubscriptionController::class, 'store'])
            ->name('store')
            ->middleware('can:subscription.actions.add');

        Route::get('create',[Modules\Subscription\Http\Controllers\SubscriptionController::class, 'create'])
            ->name('create')
            ->middleware('can:subscription.actions.add');

        Route::put('{subscription}',[Modules\Subscription\Http\Controllers\SubscriptionController::class, 'update'])
            ->name('update')
            ->middleware('can:subscription.actions.edit');

        Route::get('{subscription}/edit',[Modules\Subscription\Http\Controllers\SubscriptionController::class, 'edit'])
            ->name('edit')
            ->middleware('can:subscription.actions.edit');

        Route::delete('{subscription}',[Modules\Subscription\Http\Controllers\SubscriptionController::class, 'destroy'])
            ->name('destroy')
            ->middleware('can:subscription.actions.delete');
     


    });


});

