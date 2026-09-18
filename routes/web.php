<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Admin\VenderController;
use App\Models\Customers;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('admin.auth.signIn');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/customers', function () {
    $customers = Customers::latest()->get();
    return view('admin.customers.index', compact('customers'));
})->name('customers');


Route::resource('venders', VenderController::class);
// Route::get('/venders', function () {
//     return view('admin.venders.index');
// })->name('venders');

// Route::prefix('venders')->name('venders.')->group(function () {
//         Route::resource('vendors', VendorController::class);
//     });

// Route::post('/customers/store',[CustomerController::class,'store'])->name('customers.store');


// require __DIR__.'/api.php';