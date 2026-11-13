<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}

