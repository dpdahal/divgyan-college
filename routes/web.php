<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ApplicationController;


Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', [ApplicationController::class, 'index']);
    Route::get('about', [ApplicationController::class, 'about']);
    Route::get('contact', [ApplicationController::class, 'contact']);
});
