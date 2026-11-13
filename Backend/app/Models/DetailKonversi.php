<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailKonversi extends Model
{
    protected $table = 'detail_konversi';

    protected $primaryKey = 'id_detail_konversi';

    public $timestamps = false;

    protected $fillable = [
        'id_konversi',
        'id_mk',
        'sks_diajukan',
        'sks_disetujui',
        'status_detail',
        'catatan',
    ];
}
