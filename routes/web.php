<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\ProductController;
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
Route::get('/shop',[CustomerController::class,'shop'])->name('shop');
Route::get('/product-details',[CustomerController::class,'productdetails'])->name('product.details');
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

Route::prefix('admin')->middleware('is_admin','auth','prevent-back-history')->group(function () {
    Route::get('/dashboard',[AdminController::class,'dashboard'])->name('admin.home');
    Route::get('/add-category',[CategoryController::class,'addcategory'])->name('add.category');
    Route::get('/all-category',[CategoryController::class,'allcategory'])->name('all.category');
    Route::post('/store-category',[CategoryController::class,'store'])->name('store.category');
    Route::get('/edit-category/{id}',[CategoryController::class,'edit'])->name('edit.category');
    Route::post('/update-category{id}',[CategoryController::class,'update'])->name('update.category');
    Route::get('/delete-category/{id}',[CategoryController::class,'destroy'])->name('delete.category');
    Route::get('/add-subcategory',[SubcategoryController::class,'addsubcategory'])->name('add.subcategory');
    Route::get('/all-subcategory',[SubcategoryController::class,'allsubcategory'])->name('all.subcategory');
    Route::post('/store-subcategory',[SubcategoryController::class,'store'])->name('store.subcategory');
    Route::get('/edit-subcategory/{id}',[SubcategoryController::class,'edit'])->name('edit.subcategory');
    Route::post('/update-subcategory{id}',[SubcategoryController::class,'update'])->name('update.subcategory');
    Route::get('/delete-subcategory/{id}',[SubcategoryController::class,'destroy'])->name('delete.subcategory');
    Route::get('/add-fields',[ProductController::class,'addfields'])->name('add.fields');
    Route::get('/add-product',[ProductController::class,'addproduct'])->name('add.product');
    Route::get('/all-product',[ProductController::class,'allproduct'])->name('all.product');

});
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
