<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KegiatanMagang extends Model
{
    protected $table = 'kegiatan_magang';

    protected $primaryKey = 'id_kegiatan';

    public $timestamps = false;

    protected $fillable = [
        'id_pengajuan',
        'tanggal_kegiatan',
        'deskripsi',
        'hasil_kegiatan',
    ];
}