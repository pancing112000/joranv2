<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RanksController;

Route::get('/user', function (Request $request) {
    return User::all();//$request->user();
});//->middleware('auth:sanctum');

Route::apiResource('ranks',RanksController::class);

Route::get('/hello', function () {
    return ['message' => 'Hello API'];
});

Route::get('/ping', fn () => ['message' => 'pong']);