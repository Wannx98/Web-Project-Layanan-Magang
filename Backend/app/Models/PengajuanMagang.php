<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class PengajuanMagang extends Model
{
    protected $table = 'pengajuan_magang';

    protected $primaryKey = 'id_pengajuan';

    public $timestamps = false;

    protected $fillable = [
        'id_mahasiswa',
        'id_program',
        'id_dosen',
        'tanggal_pengajuan',
        'status',
        'catatan_mahasiswa',
    ];
    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(
            Mahasiswa::class,
            'id_mahasiswa',
            'id_mahasiswa'
        );
    }
    public function dosen(): BelongsTo
    {
    return $this->belongsTo(
        Dosen::class,
        'id_dosen',
        'id_dosen'
        );
    }
    public function dokumenPengajuans(): HasMany
    {
    return $this->hasMany(
        DokumenPengajuan::class,
        'id_pengajuan',
        'id_pengajuan'
        );
    }
    public function screenings(): HasMany
    {
    return $this->hasMany(
        Screening::class,
        'id_pengajuan',
        'id_pengajuan'
        );
    }
    public function kegiatanMagangs(): HasMany
    {
    return $this->hasMany(
        KegiatanMagang::class,
        'id_pengajuan',
        'id_pengajuan'
        );
    }
    public function pengajuanKonversi(): HasOne
    {   
    return $this->hasOne(
        PengajuanKonversi::class,
        'id_pengajuan',
        'id_pengajuan'
         );
    }
    
}