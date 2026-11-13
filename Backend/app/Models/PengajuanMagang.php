<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanMagang extends Model
{
    protected $table = 'pengajuan_magang';

    protected $primaryKey = 'id_pengajuan';

    public $timestamps = false;

    protected $fillable = [
        'id_mahasiswa',
        'id_program',
        'id_dosen',
        'tanggal_pengajuan',
        'status',
        'catatan_mahasiswa',
    ];
}