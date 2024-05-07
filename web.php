<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


Route::post('/posts-request', [userController::class,'/posts-request'])->name('/posts-request');
Route::get('/tambah-product', [PostController::class, 'handlerequest'])->name('from_product');
Route::get('/products', [userController::class, 'getproduct'])->name('edit_product');
Route::get('/product/{product}', [userController::class, 'editproduct'])->name('edit_product');
Route::put('/product/{product}/update', [userController::class, 'updateproduct'])->name('update_product');
Route::post('/product/{product}/delet', [userController::class, 'deleteproduct'])->name('delete_product');

Route::get('/admin/list-products', [UserController::class, 'getadmin'])->name('admin_page');
Route::get('/create', [UserController::class, 'create'])->name('users.create');
Route::post('users/store', [UserController::class, 'store'])->name('users.store');
Route::get('users/{id}', [UserController::class, 'show'])->name('users.show');