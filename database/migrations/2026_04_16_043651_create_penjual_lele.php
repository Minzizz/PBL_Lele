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
        Schema::create('penjual_lele', function (Blueprint $table) {
            $table->id('penjual_lele_id');
            $table->string('nama_penjual');
            $table->string('alamat')->nullable();
            $table->string('no_telepon')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjual_lele');
    }
};
