<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AdminProdi extends Model
{
    protected $table = 'admin_prodi';

    protected $primaryKey = 'id_admin';

    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'nama',
        'email',
        'prodi',
    ];
    public function screenings(): HasMany
    {
        return $this->hasMany(
            Screening::class,
            'id_admin',
            'id_admin'
        );
    }
    public function pengajuanKonversis(): HasMany
    {
    return $this->hasMany(
        PengajuanKonversi::class,
        'id_admin_pemeriksa',
        'id_admin'
        );
    }
    public function user()
    {
    return $this->belongsTo(User::class, 'user_id', 'id');
    }
    
}
