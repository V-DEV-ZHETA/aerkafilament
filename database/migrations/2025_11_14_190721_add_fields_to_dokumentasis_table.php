<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('dokumentasis', function (Blueprint $table) {
            $table->string('dokumentasi')->nullable();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('kategori')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('dokumentasis', function (Blueprint $table) {
            $table->dropColumn(['dokumentasi', 'judul', 'deskripsi', 'kategori']);
        });
    }
};
