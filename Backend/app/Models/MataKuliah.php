<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MataKuliah extends Model
{
    protected $table = 'mata_kuliah';

    protected $primaryKey = 'id_mk';

    public $timestamps = false;

    protected $fillable = [
        'kode_mk',
        'nama_mk',
        'sks',
        'prodi',
    ];
    public function cpmks(): HasMany
    {
        return $this->hasMany(
            Cpmk::class,
            'id_mk',
            'id_mk'
        );
    }
    public function rekomendasiAiDetails(): HasMany
    {
    return $this->hasMany(
        RekomendasiAiDetail::class,
        'id_mk',
        'id_mk'
        );
    }
    public function detailKonversis(): HasMany
    {
    return $this->hasMany(
        DetailKonversi::class,
        'id_mk',
        'id_mk'
        );
    }
}

