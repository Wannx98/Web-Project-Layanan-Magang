
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('screening', function (Blueprint $table) {
            $table->id('id_screening');

            $table->unsignedBigInteger('id_pengajuan');
            $table->unsignedBigInteger('id_dosen')->nullable();
            $table->unsignedBigInteger('id_admin')->nullable();

            $table->date('tanggal_screening')->useCurrent();

            $table->string('hasil', 30);
            $table->longText('catatan')->nullable();

            $table->foreign('id_pengajuan')
                ->references('id_pengajuan')
                ->on('pengajuan_magang');

            $table->foreign('id_dosen')
                ->references('id_dosen')
                ->on('dosen');

            $table->foreign('id_admin')
                ->references('id_admin')
                ->on('admin_prodi');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('screening');
    }
};
