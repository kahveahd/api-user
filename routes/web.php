<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::prefix('user')->group(function () {
    
    Route::get('welcome', function () {
        return view('welcome');
    });

    Route::prefix('register')->group(function () {
        Route::post('',[RegisterController::class,"registerEmail"] ); 
        Route::patch('email-validate', [RegisterController::class,"emailValidate"]); 
    }); 

    Route::prefix('auth')->group(function () {
        Route::get('login',[AuthController::class,"login"] ); 
        Route::get('logout', [AuthController::class,"logout"]); 
    }); 
});
