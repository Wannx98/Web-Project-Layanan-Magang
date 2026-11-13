<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function pengajuanMagang(): BelongsTo
    {
    return $this->belongsTo(
        PengajuanMagang::class,
        'id_pengajuan',
        'id_pengajuan'
        );
    }
    public function dosenVerifikator(): BelongsTo
    {
    return $this->belongsTo(
        Dosen::class,
        'id_dosen_verifikator',
        'id_dosen'
         );
    }
}
