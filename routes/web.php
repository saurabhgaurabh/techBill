<?php

use App\Http\Controllers\Admin\UnregisterCustomerController;
use App\Http\Controllers\Admin\UnregisterVendorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Admin\VenderController;
use App\Models\Customers;
use App\Http\Controllers\Admin\SalesController;
use App\Http\Controllers\Admin\AssistController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('admin.auth.signIn');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('customers', CustomerController::class);
Route::resource('withoutgstcustomer', UnregisterCustomerController::class);


Route::resource('venders', VenderController::class);
Route::resource('withoutgst', UnregisterVendorController::class );
Route::get('/venders/search', [VenderController::class, 'search'])->name('venders.search');
 
Route::resource('sales', SalesController::class);
Route::get('/admin/live-chat', function () {
    return view('admin.assistance.live-chat');
})->name('assistance.live-chat');

Route::livewire('/post/create', 'pages::post.create');














// Route::get('venders/create',[VenderController::class,'create']);
// Route::post('/venders/store', [VenderController::class,'store'])->name('venders.store');
// Route::post('/customers/store',[CustomerController::class,'store'])->name('customers.store');


// require __DIR__.'/api.php';