<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Screening extends Model
{
    protected $table = 'screening';

    protected $primaryKey = 'id_screening';

    public $timestamps = false;

    protected $fillable = [
        'id_pengajuan',
        'id_dosen',
        'id_admin',
        'tanggal_screening',
        'hasil',
        'catatan',
    ];
}
