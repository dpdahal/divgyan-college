<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ApplicationController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SuperAdminController;


Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', [ApplicationController::class, 'index']);
    Route::get('about', [ApplicationController::class, 'about']);
    Route::get('contact', [ApplicationController::class, 'contact']);
});


Route::group(['namespace' => 'Backend', 'prefix' => 'admin'], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('admin');

    Route::group(['prefix' => 'super-admin'], function () {
        Route::get('/', [SuperAdminController::class, 'index'])->name('super-admin');
        Route::get('/add-super-admin', [SuperAdminController::class, 'add'])->name('add-super-admin');
        Route::post('/add-super-admin', [SuperAdminController::class, 'addAdmin']);
        Route::get('/delete-super-admin/{criteria?}', [SuperAdminController::class, 'delete'])->name('delete-super-admin');
        Route::get('/edit-super-admin/{criteria?}', [SuperAdminController::class, 'edit'])->name('edit-super-admin');
    });

});
