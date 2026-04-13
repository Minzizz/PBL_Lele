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
        Schema::create('akuntan', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        Schema::create('pengeluarans', function (Blueprint $table) {
            $table->id();
            $table->integer('kuartal'); // 1, 2, 3, atau 4
            $table->year('tahun');
            $table->decimal('biaya_pakan', 12, 2)->default(0);
            $table->decimal('biaya_listrik', 12, 2)->default(0);
            $table->decimal('biaya_air', 12, 2)->default(0);
            $table->decimal('biaya_vitamin', 12, 2)->default(0);
            $table->decimal('total_biaya', 15, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('akuntan');
    }
};
