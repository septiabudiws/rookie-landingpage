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
        Schema::create('projek', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->text('tujuan');
            $table->string('gambar');
            $table->boolean('status');
            $table->unsignedBigInteger('author');
            $table->unsignedBigInteger('teknologi');
            $table->foreign('author')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('teknologi')->references('id')->on('teknologi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projek');
    }
};
