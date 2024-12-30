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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('client'); // Nama klien
            $table->date('project_date'); // Tanggal proyek dikerjakan
            $table->string('project_name'); // Nama proyek
            $table->text('description'); // Deskripsi proyek
            $table->string('image')->nullable(); // Path gambar proyek
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
