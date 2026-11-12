
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('laporan_magang', function (Blueprint $table) {
            $table->id('id_laporan');

            $table->unsignedBigInteger('id_pengajuan');

            $table->string('judul', 200)->nullable();
            $table->string('url_file', 500);

            $table->date('tanggal_upload')->useCurrent();

            $table->string('status_verifikasi', 20)
                ->default('MENUNGGU');

            $table->unsignedBigInteger('id_dosen_verifikator')->nullable();

            $table->longText('catatan_verifikasi')->nullable();

            $table->foreign('id_pengajuan')
                ->references('id_pengajuan')
                ->on('pengajuan_magang');

            $table->foreign('id_dosen_verifikator')
                ->references('id_dosen')
                ->on('dosen');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('laporan_magang');
    }
};
