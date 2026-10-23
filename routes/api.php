<?php

use App\Http\Controllers\Api\Admin\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Models\Customers;
use App\Http\Controllers\Api\Admin\ItemController;
use App\Models\Item;
use Illuminate\Session\Store;


Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/signup', [AuthController::class, 'store']);
// Route::get('/admin/auth/signup', function () {
//     return view('admin.auth.signup');
// })->name('signup');

Route::post('/customers/store',[CustomerController::class,'store'])->name('customers.store');
// Route::post('/items/store', [ItemController::class, 'store']);

Route::prefix('items')->name('items.')->group(function () {
    Route::get('/index', [ItemController::class, 'index'])->name('index');
    Route::post('/store', [ItemController::class, 'store'])->name('store');
    // Route::get('/{id}', [ItemController::class, 'show']);
    // Route::put('/{id}', [ItemController::class, 'update']);
    // Route::delete('/{id}', [ItemController::class, 'destroy']);
});



// Route::prefix('customers')->name('customers.')->group(function(){
//     Route::get('/customers', [CustomerController::class, 'index'])->name('index');
//     Route::post('/customers/store', [CustomerController::class, 'store'])->name('customers.store');
// });

?>
