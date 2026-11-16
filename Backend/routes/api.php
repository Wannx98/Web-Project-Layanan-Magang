<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramMagangController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

Route::get('/tes', function () {
    return response()->json([
        'message' => 'Halo! ini api pertama'
    ]);
});

Route::get('/program-magang', [ProgramMagangController::class, 'index']);

// Regist Login logout and display user info API

Route::post('/register', [AuthController::class, 'register']);

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout']);

Route::middleware('auth:sanctum')->get('/me', [AuthController::class, 'me']);

//Auth role section

     //Mahasiswaa
Route::middleware(['auth:sanctum', 'role:mahasiswa'])->get('/mahasiswa/dashboard', function (Request $request) {
    return response()->json([
        'message' => 'Selamat datang mahasiswa!',
        'user' => $request->user()->name,
    ]);
});

Route::middleware(['auth:sanctum', 'role:mahasiswa'])->get(
    '/mahasiswa/profile',
    [MahasiswaController::class, 'profile']
);

     //Dosen
Route::middleware(['auth:sanctum', 'role:dosen'])->get('/dosen/dashboard', function (Request $request) {
    return response()->json([
        'message' => 'Selamat datang Dosen!',
        'user' => $request->user()->name,
        'role' => $request->user()->role,
    ]);
});

Route::middleware(['auth:sanctum', 'role:dosen'])->get(
    '/dosen/profile',
    [DosenController::class, 'profile']
);

     //Admin
Route::middleware(['auth:sanctum', 'role:admin'])->get('/admin/dashboard', function (Request $request) {
    return response()->json([
        'message' => 'Selamat datang Admin!',
        'user' => $request->user()->name,
        'role' => $request->user()->role,
    ]);
});

        //Admin Create Dosen account func

Route::middleware(['auth:sanctum', 'role:admin'])->post(
    '/admin/create-dosen',
    [AdminController::class, 'createDosen']
);