<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/ping', function (Request $req) {
    throw new ErrorException('houve um ping');
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
