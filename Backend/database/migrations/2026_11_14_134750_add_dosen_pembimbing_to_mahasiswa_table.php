
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->unsignedBigInteger('id_dosen_pembimbing')->nullable();

            $table->foreign('id_dosen_pembimbing')
                  ->references('id_dosen')
                  ->on('dosen')
                  ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropForeign(['id_dosen_pembimbing']);
            $table->dropColumn('id_dosen_pembimbing');
        });
    }
};
