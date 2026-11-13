<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailKonversi extends Model
{
    protected $table = 'detail_konversi';

    protected $primaryKey = 'id_detail_konversi';

    public $timestamps = false;

    protected $fillable = [
        'id_konversi',
        'id_mk',
        'sks_diajukan',
        'sks_disetujui',
        'status_detail',
        'catatan',
    ];
    public function pengajuanKonversi(): BelongsTo
    {
    return $this->belongsTo(
        PengajuanKonversi::class,
        'id_konversi',
        'id_konversi'
        );
    }
    public function mataKuliah(): BelongsTo
    {
    return $this->belongsTo(
        MataKuliah::class,
        'id_mk',
        'id_mk'
         );
    }
}
