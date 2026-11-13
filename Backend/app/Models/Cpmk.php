<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
