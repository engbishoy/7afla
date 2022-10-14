
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

// Auth routes


require __DIR__ . '/auth.php';


// backend 

Route::group(['prefix' => 'dashboard', 'middleware' => 'auth:dashboard'], function () {

    // other routes
    Route::group(['prefix' => 'providers', 'as' => 'provider.'], function () {

        //the grouped operations (declare them before resource routes to avoid conflicts)
        Route::delete('delete-many', [Modules\Provider\Http\Controllers\ProviderController::class, 'destroyMany'])
            ->name('destroy.many')
            ->middleware('can:provider.actions.delete');

        Route::get('ajax/datatable', ProviderDatatableController::class)
            ->name('datatable')
            ->middleware('can:provider.actions.view');

        //Model Resources routes
        //didn't use resource to have the ability to attach permission middleware to each route
        // avoid using middlewares inside of controllers keep this structure maintained
        Route::get('/', [Modules\Provider\Http\Controllers\ProviderController::class, 'index'])
            ->name('index')
            ->middleware('can:provider.actions.view');

        Route::post('/', [Modules\Provider\Http\Controllers\ProviderController::class, 'store'])
            ->name('store')
            ->middleware('can:provider.actions.add');

        Route::get('create', [Modules\Provider\Http\Controllers\ProviderController::class, 'create'])
            ->name('create')
            ->middleware('can:provider.actions.add');

        Route::put('{provider}', [Modules\Provider\Http\Controllers\ProviderController::class, 'update'])
            ->name('update')
            ->middleware('can:provider.actions.edit');

        Route::get('{provider}/edit', [Modules\Provider\Http\Controllers\ProviderController::class, 'edit'])
            ->name('edit')
            ->middleware('can:provider.actions.edit');

        Route::delete('{provider}', [Modules\Provider\Http\Controllers\ProviderController::class, 'destroy'])
            ->name('destroy')
            ->middleware('can:provider.actions.delete');


        // trashed routes
        Route::group(['prefix' => 'trashed', 'as' => 'trashed.', 'namespace' => 'Trashed'], function () {
            //the grouped operations (declare them before resource routes to avoid conflicts)
            Route::delete('/delete-many', [Modules\Provider\Http\Controllers\Trashed\ProviderTrashedController::class, 'destroyMany'])
                ->name('destroy.many')
                ->middleware('can:provider.actions.hard_delete');

            Route::post('/restore-many', [Modules\Provider\Http\Controllers\Trashed\ProviderTrashedController::class, 'restoreMany'])
                ->name('restore.many')
                ->middleware('can:provider.actions.restore');

            // trashed resource operation
            Route::delete('/{provider}', [Modules\Provider\Http\Controllers\Trashed\ProviderTrashedController::class, 'destroy'])
                ->name('destroy')
                ->middleware('can:provider.actions.hard_delete');

            Route::post('/{provider}', [Modules\Provider\Http\Controllers\Trashed\ProviderTrashedController::class, 'restore'])
                ->name('restore')
                ->middleware('can:provider.actions.restore');

            Route::get('/ajax/datatable', ProviderTrashedDataTableController::class)
                ->name('datatable')
                ->middleware('can:provider.actions.view_trash');
        });
    });
});



//front dashboard provider

Route::group(['prefix' => '/provider/dashboard', 'middleware' => 'auth:provider'], function () {
    //dashboard page
    Route::view('/', 'provider::front.dashboard')->name('provider.dashboard');
});
