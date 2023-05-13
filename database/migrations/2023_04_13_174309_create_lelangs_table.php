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
            $table->char('harga_akhir', 20);
            $table->unsignedBigInteger('id_masyarakat');
            $table->unsignedBigInteger('id_petugas');
            $table->enum('status', ['Dibuka', 'Ditutup']);

            $table->timestamps();
            
            $table->foreign('id_barang')->references('id')->on('barang');
            $table->foreign('id_masyarakat')->references('id')->on('masyarakat');
            $table->foreign('id_petugas')->references('id')->on('petugas');
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
