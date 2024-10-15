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
        Schema::create('project', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->text('deskripsi');
            $table->unsignedBigInteger('author');
            $table->unsignedBigInteger('teknologi');
            $table->string('gambar');
            $table->boolean('status');
            $table->foreign('author')->references('id')->on('user')->onDelete('cascade');
            $table->foreign('teknologi')->references('id')->on('teknologi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project');
    }
};
