<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(
            Mahasiswa::class,
            'id_mahasiswa',
            'id_mahasiswa'
        );
    }
    public function programMagang(): BelongsTo
    {
    return $this->belongsTo(
        ProgramMagang::class,
        'id_program',
        'id_program'
        );
    }
    public function details(): HasMany
    {
    return $this->hasMany(
        RekomendasiAiDetail::class,
        'id_rekomendasi',
        'id_rekomendasi'
        );
    }
}