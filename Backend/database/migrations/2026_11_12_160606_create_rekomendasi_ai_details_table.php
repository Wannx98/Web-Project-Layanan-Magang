
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rekomendasi_ai_detail', function (Blueprint $table) {
            $table->id('id_detail');

            $table->unsignedBigInteger('id_rekomendasi');
            $table->unsignedBigInteger('id_mk');
            $table->unsignedBigInteger('id_cpmk')->nullable();

            $table->longText('alasan')->nullable();
            $table->decimal('skor_relevansi', 5, 2)->nullable();

            $table->foreign('id_rekomendasi')
                ->references('id_rekomendasi')
                ->on('rekomendasi_ai');

            $table->foreign('id_mk')
                ->references('id_mk')
                ->on('mata_kuliah');

            $table->foreign('id_cpmk')
                ->references('id_cpmk')
                ->on('cpmk');

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rekomendasi_ai_detail');
    }
};
