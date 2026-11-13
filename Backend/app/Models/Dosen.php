<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dosen extends Model
{
    protected $table = 'dosen';

    protected $primaryKey = 'id_dosen';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'nidn',
        'nama',
        'email',
    ];
    public function pengajuanMagangs(): HasMany
    {
        return $this->hasMany(
            PengajuanMagang::class,
            'id_dosen',
            'id_dosen'
        );
    }
    public function screenings(): HasMany
    {
    return $this->hasMany(
        Screening::class,
        'id_dosen',
        'id_dosen'
        );
    }
    public function pengajuanKonversis(): HasMany
    {
    return $this->hasMany(
        PengajuanKonversi::class,
        'id_dosen_pemeriksa',
        'id_dosen'
        );
    }
    public function laporanMagangs(): HasMany
    {
    return $this->hasMany(
        LaporanMagang::class,
        'id_dosen_verifikator',
        'id_dosen'
        );
    }
    public function user()
    {
    return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

