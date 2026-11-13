<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Cpmk extends Model
{
    protected $table = 'cpmk';

    protected $primaryKey = 'id_cpmk';

    public $timestamps = false;

    protected $fillable = [
        'id_mk',
        'kode_cpmk',
        'deskripsi',
    ];
    public function mataKuliah(): BelongsTo
    {
        return $this->belongsTo(
            MataKuliah::class,
            'id_mk',
            'id_mk'
        );
    }
    public function rekomendasiAiDetails(): HasMany
    {
    return $this->hasMany(
        RekomendasiAiDetail::class,
        'id_cpmk',
        'id_cpmk'
        );
    }
}
