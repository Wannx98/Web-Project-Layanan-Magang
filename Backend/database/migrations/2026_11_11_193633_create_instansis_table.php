
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('instansi', function (Blueprint $table) {
            $table->id('id_instansi');

            $table->string('nama_instansi', 150);
            $table->string('alamat', 300)->nullable();
            $table->string('website', 250)->nullable();
            $table->string('kontak_email', 150)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('instansi');
    }
};
