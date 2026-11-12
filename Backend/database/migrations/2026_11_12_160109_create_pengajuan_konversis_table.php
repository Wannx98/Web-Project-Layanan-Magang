
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pengajuan_konversi', function (Blueprint $table) {
            $table->id('id_konversi');

            $table->unsignedBigInteger('id_pengajuan')->unique();

            $table->date('tanggal_pengajuan')->useCurrent();

            $table->string('status_konversi', 30)
                ->default('DIAJUKAN');

            $table->integer('total_sks_disetujui')->nullable();

            $table->unsignedBigInteger('id_dosen_pemeriksa')->nullable();
            $table->unsignedBigInteger('id_admin_pemeriksa')->nullable();

            $table->longText('catatan')->nullable();

            $table->foreign('id_pengajuan')
                ->references('id_pengajuan')
                ->on('pengajuan_magang');

            $table->foreign('id_dosen_pemeriksa')
                ->references('id_dosen')
                ->on('dosen');

            $table->foreign('id_admin_pemeriksa')
                ->references('id_admin')
                ->on('admin_prodi');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pengajuan_konversi');
    }
};
