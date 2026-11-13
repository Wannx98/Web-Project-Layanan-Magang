<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'nim' => 'required|string|unique:mahasiswa,nim',
            'nama' => 'required|string|max:255',
            'prodi' => 'required|string',
            'angkatan' => 'required|integer',
        ]);

        DB::transaction(function () use ($validated) {

            $user = User::create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => $validated['password'],
                'role' => 'mahasiswa',
            ]);

            Mahasiswa::create([
                'user_id' => $user->id,
                'nim' => $validated['nim'],
                'nama' => $validated['nama'],
                'email' => $validated['email'],
                'prodi' => $validated['prodi'],
                'angkatan' => $validated['angkatan'],
            ]);
        });

        return response()->json([
            'message' => 'Registrasi mahasiswa berhasil!'
        ], 201);
    }
    public function login(Request $request)
    {
        // 1. Validasi input
         $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
         ]);

        // 2. Cari user berdasarkan email
         $user = User::where('email', $validated['email'])->first();

        // 3. Periksa password
         if (!$user || !Hash::check($validated['password'], $user->password)) {
             return response()->json([
                 'message' => 'Email atau password salah!'
             ], 401);
         }

        // 4. Buat token login
         $token = $user->createToken('auth_token')->plainTextToken;

        // 5. Kirim hasil login
         return response()->json([
            'message' => 'Login berhasil!',
            'token' => $token,
            'user' => [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'role' => $user->role,
            ]
         ], 200);
    }
    public function logout(Request $request)
    {
        // Menghapus token yang sedang digunakan
        $request->user()->currentAccessToken()->delete();

        return response()->json([
            'message' => 'Logout berhasil!'
        ], 200);
    }
}
