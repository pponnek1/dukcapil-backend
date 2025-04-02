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
        Schema::create('antrians', function (Blueprint $table) {
            $table->id();
            $table->string('nama_antrian');
            $table->string('kode');
            $table->text('deskripsi');
            $table->string('slug')->unique();
            $table->string('persyaratan');
            $table->integer('kuota');
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('layanans_id')->constrained('layanans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('antrians');
    }
};
