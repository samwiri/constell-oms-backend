<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BatchPackageController;
use App\Http\Controllers\ConsolidationBatcheController;
use App\Http\Controllers\DeliveryOrderController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\InvoiceLineItemController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderStatusHistoryController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PaymentController;
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
    Route::post('order_status_hisory',[OrderStatusHistoryController::class,'store'])->name('order_status_history.store');
    Route::delete('order_status_hisory/{id}',[OrderStatusHistoryController::class,'destroy']);

    Route::post('packages', [PackageController::class, 'store']);
    Route::put('packages/{id}', [PackageController::class, 'update']);
    Route::delete('packages/{id}', [PackageController::class, 'destroy']);
    Route::post('packages/{id}/package-photos', [PackageController::class, 'storePackagePhotos']);
    Route::delete('packages/{id}/package-photos', [PackageController::class, 'deletePackagePhotos']);

    Route::get('consolidation-batches', [ConsolidationBatcheController::class, 'index']);
    Route::get('consolidation-batches/{id}', [ConsolidationBatcheController::class, 'show']);
    Route::post('consolidation-batches', [ConsolidationBatcheController::class, 'store']);
    Route::put('consolidation-batches/{id}', [ConsolidationBatcheController::class, 'update']);
    Route::delete('consolidation-batches/{id}', [ConsolidationBatcheController::class, 'destroy']);
  
    Route::post('batch-packages', [BatchPackageController::class, 'store']);
    Route::delete('batch-packages', [BatchPackageController::class, 'deleteByPair']);

    Route::prefix('billing')->group(function() {
        Route::apiResource('invoices', InvoiceController::class);   
        Route::post('invoices/{id}/restore', [InvoiceController::class, 'restore']);  // Restore soft deleted invoice
            
        Route::apiResource('invoice-line-items', InvoiceLineItemController::class);
        // Restore
        Route::post('invoice-line-items/{id}/restore', [InvoiceLineItemController::class, 'restore']);

        Route::post('payments', [PaymentController::class, 'store']);
        Route::delete('payments/{payment}', [PaymentController::class, 'destroy']);
        
        Route::get('send_invoice/{invoice_id}',[InvoiceController::class,'sendInvoice']);
    });

    Route::prefix('delivery')->group(function() {
        Route::apiResource('orders', DeliveryOrderController::class);
        Route::post('orders/{delivery_order}/upload-pod', [DeliveryOrderController::class, 'uploadPod']);
        Route::post('orders/{delivery_order}/upload-signature', [DeliveryOrderController::class, 'uploadSignature']);        
        Route::post('update-orders-status/{delivery_order}', [DeliveryOrderController::class, 'updateStatus']);
        Route::get('dashboard', [DeliveryOrderController::class, 'dashboard']);
        Route::get('riders',[DeliveryOrderController::class,'riders']);
    });

    Route::get('activity_logs',[NotificationController::class,'activityLogs']);

    

});
