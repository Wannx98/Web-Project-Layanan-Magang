<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminProdi extends Model
{
    protected $table = 'admin_prodi';

    protected $primaryKey = 'id_admin';

    public $timestamps = false;

    protected $fillable = [
        'nama',
        'email',
        'prodi',
    ];
}
