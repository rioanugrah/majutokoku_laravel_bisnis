<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CartDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('cart_id')->unsigned();
            $table->bigInteger('kode_barang_id')->unsigned();
            $table->string('nama_barang');
            $table->double('qty', 12, 2)->default(0);
            $table->double('harga', 12, 2)->default(0);
            $table->double('diskon', 12, 2)->default(0);
            $table->double('subtotal', 12, 2)->default(0);
            $table->foreign('cart_id')->references('id')->on('cart');
            // $table->foreign('kode_barang_id')->references('kode_barang')->on('item');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cart_detail');
    }
}
