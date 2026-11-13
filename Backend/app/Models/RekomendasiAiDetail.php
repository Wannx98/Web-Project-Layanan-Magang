<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}