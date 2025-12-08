<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusHistoryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\WarehouseLocationController;
use Illuminate\Support\Facades\Route;


Route::prefix('auth')->group(function() {

    Route::post('register',[AuthController::class,'register']);
    Route::post('send_otp',[AuthController::class,'sendOtp']);
    Route::post('verify_otp',[AuthController::class,'verifyOtp']);
    Route::post('change_password',[AuthController::class,'changePassword']);  
    Route::post('login',[AuthController::class,'login']);     
    
});

Route::middleware(['auth:sanctum'])->group(function () {
    
    Route::prefix('auth')->group(function() {
        Route::post('logout',[AuthController::class,'userLogout']);
        Route::get('user',[AuthController::class,'userProfile']);
        Route::put('update_user',[AuthController::class,'updateUser']);       
    });

    Route::prefix('settings')->group(function() {
        Route::apiResource('locations', WarehouseLocationController::class);
    });
   

    Route::apiResource('orders', OrderController::class);
    Route::post('order_status_hisory',[OrderStatusHistoryController::class,'store']);
    Route::delete('order_status_hisory/{id}',[OrderStatusHistoryController::class,'destroy']);

    Route::post('packages', [PackageController::class, 'store']);
    Route::put('packages/{id}', [PackageController::class, 'update']);
    Route::delete('packages/{id}', [PackageController::class, 'destroy']);
    Route::post('/packages/{id}/package-photos', [PackageController::class, 'storePackagePhotos']);
    Route::delete('/packages/{id}/package-photos', [PackageController::class, 'deletePackagePhotos']);

  
});
