<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');
Route::post('/customers/store',[CustomerController::class,'store'])->name('customers.store');

?>
