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

// Auth Section

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->get('/me', [AuthController::class, 'me']);

//role section
Route::middleware(['auth:sanctum', 'role:mahasiswa'])->get('/mahasiswa/dashboard', function (Request $request) {
    return response()->json([
        'message' => 'Selamat datang mahasiswa!',
        'user' => $request->user()->name,
    ]);
});

Route::middleware(['auth:sanctum', 'role:admin'])->get('/admin/dashboard', function (Request $request) {
    return response()->json([
        'message' => 'Selamat datang Admin!',
        'user' => $request->user()->name,
        'role' => $request->user()->role,
    ]);
});