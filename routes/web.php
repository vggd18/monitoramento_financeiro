<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// APP ROUTES

Route::get('/', function () {
    return view('site.index');
});

// CATEGORY ROUTES
Route::get('/category', [CategoryController::class, 'show'])->name('category.show');

Route::post('/category', [CategoryController::class, 'create'])->name('category.create');

Route::delete('/category/{id}', [CategoryController::class, 'remove'])->name('category.remove');

// TRANSACTION ROUTES

Route::post('/transaction', [TransactionController::class, 'create'])->name('transaction.create');

Route::delete('/transaction/{id}', [TransactionController::class, 'remove'])->name('transaction.remove');


// USER ROUTES
Route::get('/user/{id}', [UserController::class, 'main'])->name('user.main');

Route::get('/user/{id}/create', [UserController::class, 'create'])->name('user.create');

Route::get('/user/{id}/remove', [UserController::class, 'remove'])->name('user.remove');

// DEV ROUTES