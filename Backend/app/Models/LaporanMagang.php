<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LaporanMagang extends Model
{
    protected $table = 'laporan_magang';

    protected $primaryKey = 'id_laporan';

    public $timestamps = false;

    protected $fillable = [
        'id_pengajuan',
        'judul',
        'url_file',
        'tanggal_upload',
        'status_verifikasi',
        'id_dosen_verifikator',
        'catatan_verifikasi',
    ];
}
