
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_konversi', function (Blueprint $table) {
            $table->id('id_detail_konversi');

            $table->unsignedBigInteger('id_konversi');
            $table->unsignedBigInteger('id_mk');

            $table->integer('sks_diajukan');
            $table->integer('sks_disetujui')->nullable();

            $table->string('status_detail', 20)
                ->default('MENUNGGU');

            $table->longText('catatan')->nullable();

            $table->foreign('id_konversi')
                ->references('id_konversi')
                ->on('pengajuan_konversi');

            $table->foreign('id_mk')
                ->references('id_mk')
                ->on('mata_kuliah');

            $table->unique(['id_konversi', 'id_mk']);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_konversi');
    }
};
