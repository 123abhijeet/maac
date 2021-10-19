<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Admin\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[CustomerController::class,'index'])->name('index');
Route::get('/contact',[CustomerController::class,'contact'])->name('contact');
Route::get('/about',[CustomerController::class,'about'])->name('about');
// Route::get('/my-account',[CustomerController::class,'myaccount'])->name('myaccount');
// Route::get('/my-wishlist',[CustomerController::class,'wishlist'])->name('wishlist');
// Route::get('/checkout',[CustomerController::class,'checkout'])->name('checkout');
// Route::get('/cart',[CustomerController::class,'cart'])->name('cart');


Auth::routes();
Route::prefix('customer')->middleware('auth','prevent-back-history')->group(function () {
    Route::get('/dashboard',[CustomerController::class,'dashboard'])->name('dashboard');
    Route::get('/my-account',[CustomerController::class,'myaccount'])->name('myaccount');
    Route::get('/my-wishlist',[CustomerController::class,'wishlist'])->name('wishlist');
    Route::get('/checkout',[CustomerController::class,'checkout'])->name('checkout');
    Route::get('/cart',[CustomerController::class,'cart'])->name('cart');
    Route::post('/update-address',[CustomerController::class,'updateaddress'])->name('address.update');
    Route::post('/update-profile',[CustomerController::class,'updateprofile'])->name('update.profile');
});

Route::prefix('admin')->middleware('is_admin')->group(function () {
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.home');
});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
