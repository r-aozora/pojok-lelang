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
        Schema::create('lelang', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->foreignId('produk_id')->constrained('produk')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('masyarakat_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('petugas_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->unsignedBigInteger('harga_akhir')->nullable();
            $table->enum('status', ['0', '1', '2'])->nullable()->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lelang');
    }
};
