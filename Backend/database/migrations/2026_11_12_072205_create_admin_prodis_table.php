
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('admin_prodi', function (Blueprint $table) {
            $table->id('id_admin');
            $table->string('nama', 150);
            $table->string('email', 150)->unique();
            $table->string('prodi', 100)->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admin_prodi');
    }
};
