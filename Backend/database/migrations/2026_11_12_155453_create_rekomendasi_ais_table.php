
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rekomendasi_ai', function (Blueprint $table) {
            $table->id('id_rekomendasi');

            $table->unsignedBigInteger('id_mahasiswa');
            $table->unsignedBigInteger('id_program');

            $table->date('tanggal_dibuat')->useCurrent();

            $table->string('versi_model', 100)->nullable();
            $table->longText('ringkasan')->nullable();

            $table->foreign('id_mahasiswa')
                ->references('id_mahasiswa')
                ->on('mahasiswa');

            $table->foreign('id_program')
                ->references('id_program')
                ->on('program_magang');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rekomendasi_ai');
    }
};
