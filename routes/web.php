<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function () {
    
    Route::get('welcome', function () {
        return view('welcome');
    });

    Route::prefix('auth')->group(function () {
        Route::get('login',[AuthController::class,"login"] ); 
        Route::get('logout', [AuthController::class,"logout"]); 
    }); 
});
