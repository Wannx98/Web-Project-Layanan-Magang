<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dosen;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function createDosen(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'nidn' => 'required|string|max:20|unique:dosen,nidn',
            'nama' => 'required|string|max:150',
            'email' => 'required|email|max:150|unique:users,email|unique:dosen,email',
            'password' => 'required|string|min:8',
        ]); 

        // Simpan akun dan profil Dosen
        DB::transaction(function () use ($validated) {

            $user = User::create([
                'name' => $validated['nama'],
                'email' => $validated['email'],
                'password' => $validated['password'],
                'role' => 'dosen',
            ]);

            Dosen::create([
                'user_id' => $user->id,
                'nidn' => $validated['nidn'],
                'nama' => $validated['nama'],
                'email' => $validated['email'],
            ]);

        });

        return response()->json([
            'message' => 'Akun Dosen berhasil dibuat!'
        ], 201);
    }
}