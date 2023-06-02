<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLelangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lelang', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_barang');
            $table->unsignedBigInteger('harga_akhir')->nullable()->default(null);
            $table->unsignedBigInteger('id_masyarakat')->nullable()->default(null);
            $table->unsignedBigInteger('id_petugas')->nullable()->default(null);
            $table->enum('status', ['0', 'Dibuka', 'Ditutup'])->default('0');

            $table->timestamps();
            
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->foreign('id_masyarakat')->references('id')->on('users');
            $table->foreign('id_petugas')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lelang');
    }
}
