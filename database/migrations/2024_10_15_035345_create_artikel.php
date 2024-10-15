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
            $table->unsignedBigInteger('komentar');
            $table->unsignedBigInteger('kategori');
            $table->string('gambar');
            $table->foreign('komentar')->references('id')->on('komentar')->onDelete('cascade');
            $table->foreign('kategori')->references('id')->on('kategori')->onDelete('cascade');
            $table->foreign('author')->references('id')->on('user')->onDelete('cascade');
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
