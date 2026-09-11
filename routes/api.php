<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;

Route::post('/customers', [CustomerController::class, 'store']);
// Route::post('/api/customers', [CustomerController::class, 'store'])->middleware('api.auth');
// Route::middleware('api.auth')->group(function () {

//     Route::post('/api/customers', [CustomerController::class, 'store']);

// });

?>
