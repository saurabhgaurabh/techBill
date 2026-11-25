<?php

use App\Livewire\Admin\LiveChat;
use App\Http\Controllers\Admin\UnregisterCustomerController;
use App\Http\Controllers\Admin\UnregisterVendorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Admin\VenderController;
use App\Models\Customers;
use App\Http\Controllers\Api\Admin\SalesController;
use App\Http\Controllers\Admin\AssistController;
use App\Livewire\Admin\HelpDesk;
use App\Http\Controllers\api\admin\AuthController;
use App\Livewire\Admin\CustomerVendorChat;
use App\Livewire\Admin\UserChat;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('admin.auth.signIn');
});

Route::post('/admin/login', [AuthController::class,'webLogin'])->name('admin.login.submit');




Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::resource('customers', CustomerController::class);
Route::resource('withoutgstcustomer', UnregisterCustomerController::class);


Route::resource('venders', VenderController::class);
Route::resource('withoutgst', UnregisterVendorController::class );
Route::get('/venders/search', [VenderController::class, 'search'])->name('venders.search');
 
Route::prefix('sales')->name('sales.')->group( function () {
    Route::get('/', [SalesController::class, 'index'])->name('index');
    Route::get('/create', [SalesController::class, 'create'])->name('create');
    // Route::get('/edit', [SalesController::class, 'edit'])->name('edit');
});
Route::livewire('/post/create', 'pages::post.create');
Route::get('/admin/live-chat', function(){
    return view('admin.assistance.live-chat');
})->name('admin.live-chat');

Route::get('/admin/help-desk', function () {
    return view('admin.assistance.helpdesk');
})->name('admin.help-desk');

Route::get('/admin/customer-vendor-chat', function () {
    return view('admin.assistance.customer-vendor-chat');
})->name('admin.customer-vendor-chat');




Route::get('/admin/assistance/user-chat', UserChat::class)
    ->name('admin.user-chat'); 




// Route::get('venders/create',[VenderController::class,'create']);
// Route::post('/venders/store', [VenderController::class,'store'])->name('venders.store');
// Route::post('/customers/store',[CustomerController::class,'store'])->name('customers.store');


// require __DIR__.'/api.php';