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
        Schema::create('artikel', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('isi');
            $table->unsignedBigInteger('author');
            $table->string('gambar');
            $table->unsignedBigInteger('komentar');
            $table->unsignedBigInteger('kategori');
            $table->foreign('author')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('komentar')->references('id')->on('komentar')->onDelete('cascade');
            $table->foreign('kategori')->references('id')->on('kategori')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('artikel');
    }
};
