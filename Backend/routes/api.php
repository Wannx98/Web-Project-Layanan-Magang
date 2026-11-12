<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramMagangController;

Route::get('/tes', function () {
    return response()->json([
        'message' => 'Halo! ini api pertama'
    ]);
});

Route::get('/program-magang', [ProgramMagangController::class, 'index']);