<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $primaryKey = 'id_mahasiswa';

    public $timestamps = false;

    protected $fillable = [
        'nim',
        'nama',
        'email',
        'prodi',
        'angkatan',
    ];
}