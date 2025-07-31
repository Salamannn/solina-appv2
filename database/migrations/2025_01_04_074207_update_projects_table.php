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
        Schema::table('projects', function (Blueprint $table) {
            // Ubah nama kolom 'description' menjadi 'description_id'
            $table->renameColumn('description', 'description_id');

            // Tambahkan kolom baru 'description_en'
            $table->text('description_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
              // Kembalikan nama kolom 'description_id' menjadi 'description'
              $table->renameColumn('description_id', 'description');

              // Hapus kolom 'description_en'
              $table->dropColumn('description_en');
        });
    }
};
