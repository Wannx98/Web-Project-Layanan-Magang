
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dokumen_pengajuan', function (Blueprint $table) {
            $table->id('id_dokumen');

            $table->unsignedBigInteger('id_pengajuan');

            $table->string('nama_dokumen', 150);
            $table->string('jenis_dokumen', 50)->nullable();
            $table->string('url_file', 500);

            $table->date('tanggal_upload')->useCurrent();

            $table->string('status_verifikasi', 20)
                ->default('MENUNGGU');

            $table->longText('catatan_verifikasi')->nullable();

            $table->foreign('id_pengajuan')
                ->references('id_pengajuan')
                ->on('pengajuan_magang');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dokumen_pengajuan');
    }
};
