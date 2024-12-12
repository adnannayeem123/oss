<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CatagoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;




//admin panel routes



Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/do-login',[LoginController::class,'Dologin'])->name('do_login');

//middleware
    Route::group(['middleware'=>'auth'],function(){

    Route::get('/',[HomeController::class,'Home'])->name('dashboard');

    Route::get('/catagory',[CatagoryController::class,'Catagory']);
    Route::get('/category-form',[CatagoryController::class,'categoryform']);
    Route::post('/category-store',[CatagoryController::class,'categorystore']);
    
    Route::get('/product',[ProductController::class,'product']);
    Route::get('/product-form',[ProductController::class,'productform']);
    Route::post('/product-store',[ProductController::class,'productstore']);
    
    Route::post('/wishlist-form',[WishlistController::class,'Wishlist']);
    
    Route::get('/sign-out',[LoginController::class,'sign_out'])->name('sign-out');

 });

