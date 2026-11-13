<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RekomendasiAiDetail extends Model
{
    protected $table = 'rekomendasi_ai_detail';

    protected $primaryKey = 'id_detail';

    public $timestamps = false;

    protected $fillable = [
        'id_rekomendasi',
        'id_mk',
        'id_cpmk',
        'alasan',
        'skor_relevansi',
    ];
    public function rekomendasiAi(): BelongsTo
    {
        return $this->belongsTo(
            RekomendasiAi::class,
            'id_rekomendasi',
            'id_rekomendasi'
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
    public function cpmk(): BelongsTo
    {
    return $this->belongsTo(
        Cpmk::class,
        'id_cpmk',
        'id_cpmk'
    );
    }
}