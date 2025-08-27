<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function (Request $req) {
    throw new ErrorException('houve um ping');
});

Route::get('/user/login', [AuthController::class, 'logIn']);
Route::get('/user/logout', [AuthController::class, 'logOut']);

Route::get('/users', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::put('/user/{id}', [UserController::class, 'update']);
Route::delete('/user/{id}', [UserController::class, 'destroy']);

Route::get('/categories', [CategoryController::class, 'index']);
Route::post('/category', [CategoryController::class, 'store']);
Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::put('/category/{id}', [CategoryController::class, 'update']);
Route::delete('/category/{id}', [CategoryController::class, 'destroy']);

Route::get('/category/expenses', [ExpenseController::class, 'index']);
Route::post('/category/expense', [ExpenseController::class, 'store']);
Route::get('/category/expense/{id}', [ExpenseController::class, 'show']);
Route::put('/category/expense/{id}', [ExpenseController::class, 'update']);
Route::delete('/category/expense/{id}', [ExpenseController::class, 'destroy']);


