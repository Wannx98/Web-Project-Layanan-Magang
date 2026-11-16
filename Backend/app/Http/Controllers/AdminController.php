<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dosen;
use App\Models\Mahasiswa;
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

    public function assignDosenPembimbing(Request $request)
    {
        $validated = $request->validate([
            'id_mahasiswa' => 'required|exists:mahasiswa,id_mahasiswa',
            'id_dosen' => 'required|exists:dosen,id_dosen',
        ]);

        $mahasiswa = Mahasiswa::find($validated['id_mahasiswa']);

        $mahasiswa->id_dosen_pembimbing = $validated['id_dosen'];
        $mahasiswa->save();

        return response()->json([
            'message' => 'Dosen Pembimbing berhasil ditetapkan!',
            'data' => [
                'id_mahasiswa' => $mahasiswa->id_mahasiswa,
                'nama_mahasiswa' => $mahasiswa->nama,
                'id_dosen_pembimbing' => $mahasiswa->id_dosen_pembimbing,
            ]
        ], 200);
    }

    public function daftarMahasiswaDpa()
    {
        $mahasiswa = Mahasiswa::with([
            'dosenPembimbing:id_dosen,nama,nidn'
        ])->get([
            'id_mahasiswa',
            'nim',
            'nama',
            'email',
            'prodi',
            'angkatan',
            'id_dosen_pembimbing',
        ]);

        return response()->json([
            'message' => 'Berhasil mengambil daftar mahasiswa dan DPA!',
            'total' => $mahasiswa->count(),
            'data' => $mahasiswa,
        ], 200);
    }


}