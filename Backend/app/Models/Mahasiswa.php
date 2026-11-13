<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $primaryKey = 'id_mahasiswa';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'nim',
        'nama',
        'email',
        'prodi',
        'angkatan',
    ];
    public function pengajuanMagangs(): HasMany
    {
        return $this->hasMany(
            PengajuanMagang::class,
            'id_mahasiswa',
            'id_mahasiswa'
        );
    }
    public function rekomendasiAis(): HasMany
    {
    return $this->hasMany(
        RekomendasiAi::class,
        'id_mahasiswa',
        'id_mahasiswa'
         );
    }
    public function user()
    {
    return $this->belongsTo(User::class, 'user_id', 'id');
    }
}