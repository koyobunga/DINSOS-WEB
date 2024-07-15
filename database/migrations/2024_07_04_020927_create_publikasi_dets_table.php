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
        Schema::create('publikasi_dets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('publikasi_id');
            $table->string('nama');
            $table->text('ket')->nullable();
            $table->string('nm_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publikasi_dets');
    }
};
