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
          Schema::table('penjualans', function (Blueprint $table) {
            $table->date('tanggal')->nullable();
            $table->integer('jumlah_kg')->nullable();
            $table->integer('harga_per_kg')->nullable();
            $table->integer('total_pendapatan')->nullable();
            $table->integer('biaya_operasional')->nullable();
            $table->integer('keuntungan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('penjualans', function (Blueprint $table) {
        $table->dropColumn([
            'tanggal',
            'jumlah_kg',
            'harga_per_kg',
            'total_pendapatan',
            'biaya_operasional',
            'keuntungan'
        ]);
    });
    }
};
