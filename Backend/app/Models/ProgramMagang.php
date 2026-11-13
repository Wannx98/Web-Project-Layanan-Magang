<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProgramMagang extends Model
{
    protected $table = 'program_magang';

    protected $primaryKey = 'id_program';

    public $timestamps = false;

    protected $fillable = [
        'id_instansi',
        'nama_program',
        'deskripsi_pekerjaan',
        'periode_mulai',
        'periode_selesai',
        'persyaratan',
        'link_rekrutmen',
        'status_program',
    ];
     public function instansi(): BelongsTo
    {
        return $this->belongsTo(
            Instansi::class,
            'id_instansi',
            'id_instansi'
        );
    }
     public function pengajuanMagangs(): HasMany
    {
        return $this->hasMany(
            PengajuanMagang::class,
            'id_program',
            'id_program'
        );
    }
    public function rekomendasiAis(): HasMany
    {
    return $this->hasMany(
        RekomendasiAi::class,
        'id_program',
        'id_program'
        );
    }
}

