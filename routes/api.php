<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function (Request $req) {
    throw new ErrorException('houve um ping');
});

Route::get('/user/login', [UserController::class, 'logIn']);
Route::get('/user/logout', [UserController::class, 'logOut']);

Route::get('/users', UserController::class, 'index');
Route::post('/users', UserController::class, 'store');
Route::get('/user/{id}', UserController::class, 'show');
Route::put('/user/{id}', UserController::class, 'update');
Route::delete('/user/{id}', UserController::class, 'destroy');


