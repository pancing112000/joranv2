<?php

use App\Http\Controllers\RanksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('ranks',RanksController::class);

Route::get('/hello', function () {
    return ['message' => 'Hello API'];
});
