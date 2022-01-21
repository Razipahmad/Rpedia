<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard','Admin\FrontendController@index');

    Route::get('/category','Admin\CategoryController@index');
    Route::get('/add-categories','Admin\CategoryController@add');
    route::post('insert-category','Admin\CategoryController@insert');
    route::get('edit-category/{id}', [CategoryController::class ,'edit']);
    route::put('update-category/{id}', [CategoryController::class,'update']);
    route::get('delete-category/{id}', [CategoryController::class,'destroy']);
});