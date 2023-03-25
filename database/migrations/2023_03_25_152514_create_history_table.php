<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->integer('id_hitory', 11)->unique();
            $table->integer('id_lelang');
            $table->integer('id_barang');
            $table->integer('id_user');
            $table->char('penawaran_harga', 20);
            $table->timestamps();
            
            $table->foreign('id_lelang')->references('id_lelang')->on('lelang');
            $table->foreign('id_barang')->references('id_barang')->on('barang');
            $table->foreign('id_user')->references('id_user')->on('masyarakat');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('history');
    }
}
