
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id('id_dosen');
            $table->string('nidn', 20)->unique();
            $table->string('nama', 150);
            $table->string('email', 150)->unique();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};
