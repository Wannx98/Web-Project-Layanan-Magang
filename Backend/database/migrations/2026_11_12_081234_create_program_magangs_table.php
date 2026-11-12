
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program_magang', function (Blueprint $table) {
            $table->id('id_program');

            $table->unsignedBigInteger('id_instansi');

            $table->string('nama_program', 150);
            $table->longText('deskripsi_pekerjaan')->nullable();
            $table->date('periode_mulai')->nullable();
            $table->date('periode_selesai')->nullable();
            $table->longText('persyaratan')->nullable();
            $table->string('link_rekrutmen', 500)->nullable();

            $table->string('status_program', 20)->default('AKTIF');

            $table->foreign('id_instansi')
                ->references('id_instansi')
                ->on('instansi');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program_magang');
    }
};
