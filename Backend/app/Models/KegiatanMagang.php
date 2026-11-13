<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KegiatanMagang extends Model
{
    protected $table = 'kegiatan_magang';

    protected $primaryKey = 'id_kegiatan';

    public $timestamps = false;

    protected $fillable = [
        'id_pengajuan',
        'tanggal_kegiatan',
        'deskripsi',
        'hasil_kegiatan',
    ];
    public function pengajuanMagang(): BelongsTo
    {
    return $this->belongsTo(
        PengajuanMagang::class,
        'id_pengajuan',
        'id_pengajuan'
        );
    }
}