<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Tambahkan role ke users
        Schema::table('users', function (Blueprint $table) {
            $table->string('role', 30)->default('mahasiswa');
        });

        // Hubungkan mahasiswa dengan users
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->unique()->constrained('users')->cascadeOnDelete();
        });

        // Hubungkan dosen dengan users
        Schema::table('dosen', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->unique()->constrained('users')->cascadeOnDelete();
        });

        // Hubungkan admin_prodi dengan users
        Schema::table('admin_prodi', function (Blueprint $table) {
            $table->foreignId('user_id')->nullable()->unique()->constrained('users')->cascadeOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('mahasiswa', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropUnique(['user_id']);
            $table->dropColumn('user_id');
        });

        Schema::table('dosen', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropUnique(['user_id']);
            $table->dropColumn('user_id');
        });

        Schema::table('admin_prodi', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropUnique(['user_id']);
            $table->dropColumn('user_id');
        });

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};