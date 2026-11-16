<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profile(Request $request)
    {
        // Ambil akun Mahasiswa yang sedang login
        $user = $request->user();

        // Ambil profil Mahasiswa berdasarkan relasi user_id
        $mahasiswa = $user->mahasiswa;

        // Kalau akun tidak memiliki profil Mahasiswa
        if (!$mahasiswa) {
            return response()->json([
                'message' => 'Profil Mahasiswa tidak ditemukan!'
            ], 404);
        }

        // Kirim data profil Mahasiswa
        return response()->json([
            'message' => 'Berhasil mengambil profil Mahasiswa!',
            'data' => [
                'id_mahasiswa' => $mahasiswa->id_mahasiswa,
                'nim' => $mahasiswa->nim,
                'nama' => $mahasiswa->nama,
                'email' => $mahasiswa->email,
            ]
        ], 200);
    }
}
