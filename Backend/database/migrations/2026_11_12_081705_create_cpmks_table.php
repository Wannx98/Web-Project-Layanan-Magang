
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cpmk', function (Blueprint $table) {
            $table->id('id_cpmk');

            $table->unsignedBigInteger('id_mk');

            $table->string('kode_cpmk', 30);
            $table->longText('deskripsi');

            $table->foreign('id_mk')
                ->references('id_mk')
                ->on('mata_kuliah');

            $table->unique(['id_mk', 'kode_cpmk']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cpmk');
    }
};
