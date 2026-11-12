
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengajuan_magang', function (Blueprint $table) {
            $table->id('id_pengajuan');

            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedBigInteger('id_program');
            $table->unsignedBigInteger('id_dosen')->nullable();

            $table->date('tanggal_pengajuan')->useCurrent();

            $table->string('status', 30)
                ->default('MENUNGGU_SCREENING');

            $table->longText('catatan_mahasiswa')->nullable();

            $table->foreign('id_mahasiswa')
                ->references('id_mahasiswa')
                ->on('mahasiswa');

            $table->foreign('id_program')
                ->references('id_program')
                ->on('program_magang');

            $table->foreign('id_dosen')
                ->references('id_dosen')
                ->on('dosen');

            $table->unique(['id_mahasiswa', 'id_program']);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_magang');
    }
};
