<?php

use App\Http\Controllers\Api\Admin\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Models\Customers;
use App\Http\Controllers\Api\Admin\ItemController;
use App\Models\Item;
use Illuminate\Session\Store;
use App\Http\Controllers\Api\Admin\SalesController;
use App\Http\Controllers\Api\Admin\PurchaseController;
// use App\Http\Controllers\Api\Vendor\AuthController;


Route::post('/auth/signup', [AuthController::class, 'store']);

// Route::post('/customers/store',[CustomerController::class,'store'])->name('customers.store');
// Route::prefix('customers')->name('customers.')->group( function () {
//     Route::get('/index', [CustomerController::class, 'index'])->name('index');
//     Route::post('/store', [CustomerController::class, 'store'])->name('store');
// });

Route::prefix('items')->name('items.')->group(function () {
    Route::get('/index', [ItemController::class, 'index'])->name('index');
    Route::get('/create', [ItemController::class, 'create'])->name('create');
    Route::post('/store', [ItemController::class, 'store'])->name('store');
    // Route::get('/{id}', [ItemController::class, 'show']);
    // Route::put('/{id}', [ItemController::class, 'update']);
    // Route::delete('/{id}', [ItemController::class, 'destroy']);
});


Route::prefix('sales')->name('sales.')->group(function () {
    // Route::get('/index', [SalesController::class, 'index'])->name('index');
    // Route::get('/create', [SalesController::class, 'create'])->name('create');
    Route::post('/store', [SalesController::class, 'store'])->name('store');
});

Route::prefix('purchase')->name('purchase.')->group(function () {
    // Route::get('/index', [PurchaseController::class, 'index'])->name('index');
    Route::post('/store', [PurchaseController::class, 'store'])->name('store');
});
?>
