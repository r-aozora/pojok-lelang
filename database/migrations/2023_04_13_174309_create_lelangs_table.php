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
            $table->integer('id_lelang', 11)->unique();
            $table->integer('id_barang');
            // $table->date('tanggal_lelang');
            $table->char('harga_akhir', 20);
            $table->integer('id_user');
            $table->integer('id_petugas');
            $table->enum('status', ['Dibuka', 'Ditutup']);

            $table->timestamps();
            
            $table->foreign('id_barang')->references('id_barang')->on('barang');
            $table->foreign('id_user')->references('id_user')->on('masyarakat');
            $table->foreign('id_petugas')->references('id_petugas')->on('petugas');
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
