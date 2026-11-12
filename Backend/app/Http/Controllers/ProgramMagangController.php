<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramMagangController extends Controller
{
    public function index()
    {
        $program = [
            [
                'id' => 1,
                'nama' => 'Software Engineer Intern',
                'instansi' => 'PT Teknologi Indonesia',
                'lokasi' => 'Jakarta'
            ],
            [
                'id' => 2,
                'nama' => 'Cyber Security Intern',
                'instansi' => 'PT Digital Nusantara',
                'lokasi' => 'Depok'
            ]
        ];

        return response()->json([
            'success' => true,
            'data' => $program
        ]);
    }
}
