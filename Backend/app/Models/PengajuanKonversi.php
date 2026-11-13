<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PengajuanKonversi extends Model
{
    protected $table = 'pengajuan_konversi';

    protected $primaryKey = 'id_konversi';

    public $timestamps = false;

    protected $fillable = [
        'id_pengajuan',
        'tanggal_pengajuan',
        'status_konversi',
        'total_sks_disetujui',
        'id_dosen_pemeriksa',
        'id_admin_pemeriksa',
        'catatan',
    ];
}
