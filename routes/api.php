<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Models\Customers;

// Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::post('/customers/store',[CustomerController::class,'store'])->name('customers.store');

// Route::prefix('customers')->name('customers.')->group(function(){
//     Route::get('/customers', [CustomerController::class, 'index'])->name('index');
//     Route::post('/customers/store', [CustomerController::class, 'store'])->name('customers.store');
// });

?>
