<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
    public function pengajuanMagang(): BelongsTo
    {
        return $this->belongsTo(
            PengajuanMagang::class,
            'id_pengajuan',
            'id_pengajuan'
        );
    }
    public function adminProdi(): BelongsTo
    {
    return $this->belongsTo(
        AdminProdi::class,
        'id_admin',
        'id_admin'
        );
    }
}
