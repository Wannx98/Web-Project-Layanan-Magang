<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RekomendasiAi extends Model
{
    protected $table = 'rekomendasi_ai';

    protected $primaryKey = 'id_rekomendasi';

    public $timestamps = false;

    protected $fillable = [
        'id_mahasiswa',
        'id_program',
        'tanggal_dibuat',
        'versi_model',
        'ringkasan',
    ];
}