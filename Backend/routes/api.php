<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramMagangController;
use App\Http\Controllers\AuthController;

Route::get('/tes', function () {
    return response()->json([
        'message' => 'Halo! ini api pertama'
    ]);
});

Route::get('/program-magang', [ProgramMagangController::class, 'index']);

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);