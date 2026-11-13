<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumenPengajuan extends Model
{
    protected $table = 'dokumen_pengajuan';

    protected $primaryKey = 'id_dokumen';

    public $timestamps = false;

    protected $fillable = [
        'id_pengajuan',
        'nama_dokumen',
        'jenis_dokumen',
        'url_file',
        'tanggal_upload',
        'status_verifikasi',
        'catatan_verifikasi',
    ];
}
