<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function profile(Request $request)
    {
        // Ambil akun Dosen yang sedang login
        $user = $request->user();

        // Ambil profil Dosen berdasarkan relasi user_id
        $dosen = $user->dosen;

        // Kalau akun tidak memiliki profil Dosen
        if (!$dosen) {
            return response()->json([
                'message' => 'Profil Dosen tidak ditemukan!'
            ], 404);
        }

        // Kirim data profil Dosen
        return response()->json([
            'message' => 'Berhasil mengambil profil Dosen!',
            'data' => [
                'id_dosen' => $dosen->id_dosen,
                'nidn' => $dosen->nidn,
                'nama' => $dosen->nama,
                'email' => $dosen->email,
            ]
        ], 200);
    }

    public function mahasiswaBimbingan(Request $request)
    {
        $dosen = $request->user()->dosen;

        if (!$dosen) {
            return response()->json([
                'message' => 'Profil Dosen tidak ditemukan!'
            ], 404);
        }

        $mahasiswa = $dosen->mahasiswaBimbingan()
            ->get([
                'id_mahasiswa',
                'nim',
                'nama',
                'email',
                'prodi',
                'angkatan',
            ]);

        return response()->json([
            'message' => 'Berhasil mengambil daftar mahasiswa bimbingan!',
            'total' => $mahasiswa->count(),
            'data' => $mahasiswa,
        ], 200);
    }

}
