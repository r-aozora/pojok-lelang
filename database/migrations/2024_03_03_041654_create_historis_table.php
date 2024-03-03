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
        Schema::create('histori', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lelang_id')->constrained('lelang')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('masyarakat_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('penawaran');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('histori');
    }
};
