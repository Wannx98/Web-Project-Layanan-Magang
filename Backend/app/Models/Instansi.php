<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instansi extends Model
{
    protected $table = 'instansi';

    protected $primaryKey = 'id_instansi';

    public $timestamps = false;

    protected $fillable = [
        'nama_instansi',
        'alamat',
        'website',
        'kontak_email',
    ];

    public function programMagangs(): HasMany
    {
        return $this->hasMany(
            ProgramMagang::class,
            'id_instansi',
            'id_instansi'
        );
    }
}
