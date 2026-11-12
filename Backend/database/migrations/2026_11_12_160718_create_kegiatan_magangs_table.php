
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('kegiatan_magang', function (Blueprint $table) {
            $table->id('id_kegiatan');

            $table->unsignedBigInteger('id_pengajuan');

            $table->date('tanggal_kegiatan');
            $table->longText('deskripsi');
            $table->longText('hasil_kegiatan')->nullable();

            $table->foreign('id_pengajuan')
                ->references('id_pengajuan')
                ->on('pengajuan_magang');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('kegiatan_magang');
    }
};
