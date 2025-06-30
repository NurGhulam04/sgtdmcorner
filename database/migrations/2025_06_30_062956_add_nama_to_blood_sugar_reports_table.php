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
        Schema::table('blood_sugar_reports', function (Blueprint $table) {
            $table->string('nama')->after('id'); // Menambahkan kolom 'nama' setelah kolom 'id'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blood_sugar_reports', function (Blueprint $table) {
            //
        });
    }
};
