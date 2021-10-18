<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\CustomerController;
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
Route::get('/my-account',[CustomerController::class,'myaccount'])->name('myaccount');
Route::get('/my-wishlist',[CustomerController::class,'wishlist'])->name('wishlist');
Route::get('/checkout',[CustomerController::class,'checkout'])->name('checkout');
Route::get('/contact',[CustomerController::class,'contact'])->name('contact');
Route::get('/cart',[CustomerController::class,'cart'])->name('cart');
Route::get('/about',[CustomerController::class,'about'])->name('about');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
