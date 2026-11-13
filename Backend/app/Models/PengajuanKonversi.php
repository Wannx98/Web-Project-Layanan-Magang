<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PengajuanKonversi extends Model
{
    protected $table = 'pengajuan_konversi';

    protected $primaryKey = 'id_konversi';

    public $timestamps = false;

    protected $fillable = [
        'id_pengajuan',
        'tanggal_pengajuan',
        'status_konversi',
        'total_sks_disetujui',
        'id_dosen_pemeriksa',
        'id_admin_pemeriksa',
        'catatan',
    ];
    public function pengajuanMagang(): BelongsTo
    {
    return $this->belongsTo(
        PengajuanMagang::class,
        'id_pengajuan',
        'id_pengajuan'
        );
    }
    public function dosenPemeriksa(): BelongsTo
    {
    return $this->belongsTo(
        Dosen::class,
        'id_dosen_pemeriksa',
        'id_dosen'
        );
    }
    public function adminPemeriksa(): BelongsTo
    {
    return $this->belongsTo(
        AdminProdi::class,
        'id_admin_pemeriksa',
        'id_admin'
        );
    }
    public function detailKonversis(): HasMany
    {
    return $this->hasMany(
        DetailKonversi::class,
        'id_konversi',
        'id_konversi'
        );
    }
    
}
