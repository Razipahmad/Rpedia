<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
// use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\frontend\FrontendController;

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [FrontendController::class, 'index']);

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard','Admin\FrontendController@index');

    Route::get('category','Admin\CategoryController@index');
    Route::get('/add-categories','Admin\CategoryController@add');
    route::post('insert-category','Admin\CategoryController@insert');
    route::get('edit-category/{id}', [CategoryController::class ,'edit']);
    route::put('update-category/{id}', [CategoryController::class,'update']);
    route::get('delete-category/{id}', [CategoryController::class,'destroy']);

    Route::get('products','Admin\ProductController@index');
    route::get('add-products', [ProductController::class ,'add']);
    route::post('insert-product', [ProductController::class ,'insert']);
    route::get('edit-product/{id}', [ProductController::class ,'edit']);
    route::put('update-product/{id}', [ProductController::class,'update']);
    route::get('delete-product/{id}', [ProductController::class,'destroy']);
});