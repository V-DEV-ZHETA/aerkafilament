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
        Schema::table('beritas', function (Blueprint $table) {
            $table->string('foto')->nullable();
            $table->string('judul');
            $table->text('deskripsi');
            $table->string('url')->nullable();
            $table->date('tanggal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('beritas', function (Blueprint $table) {
            $table->dropColumn(['foto', 'judul', 'deskripsi', 'url', 'tanggal']);
        });
    }
};
