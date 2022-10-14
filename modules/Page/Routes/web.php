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

        // rest of routes
        Route::group(['prefix' => 'page', 'as' => 'page.'], function () {

            //the grouped operations (declare them before resource routes to avoid conflicts)
            Route::delete('delete-many', [Modules\Page\Http\Controllers\PageController::class, 'destroyMany'])
            ->name('destroy.many');
    
    
            Route::get('ajax/datatable', PageDatatableController::class)
                ->name('datatable');
    
    
            //Model Resources routes
            //didn't use resource to have the ability to attach permission middleware to each route
            // avoid using middlewares inside of controllers keep this structure maintained
            Route::get('/',[Modules\Page\Http\Controllers\PageController::class, 'index'])
                ->name('index');
    
            
            Route::post('/',[Modules\Page\Http\Controllers\PageController::class, 'store'])
                ->name('store');
    
    
            Route::get('create',[Modules\Page\Http\Controllers\PageController::class, 'create'])
                ->name('create');
    
    
            Route::put('{page}',[Modules\Page\Http\Controllers\PageController::class, 'update'])
                ->name('update');
    
            Route::get('{page}/edit',[Modules\Page\Http\Controllers\PageController::class, 'edit'])
                ->name('edit');
    
    
            Route::delete('{page}',[Modules\Page\Http\Controllers\PageController::class, 'destroy'])
                ->name('destroy');
    
            });


        
});