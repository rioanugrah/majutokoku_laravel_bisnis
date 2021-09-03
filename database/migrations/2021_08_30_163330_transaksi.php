<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Transaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->bigInteger('no_invoice')->primary();
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('metode_pembayaran')->unsigned();
            $table->string('bukti_pembayaran')->nullable();
            $table->integer('kode_unik')->default(0);
            $table->enum('status_pembayaran', array('Y','N','P'));
            $table->double('total', 12, 2)->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('transaksi_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('no_invoice_id')->unsigned();
            $table->bigInteger('item_id')->unsigned();
            $table->string('nama_item')->nullable();
            $table->integer('qty')->nullable();
            $table->double('total', 12, 2)->default(0);
            $table->timestamps();
            $table->softDeletes();
            // $table->foreign('no_invoice_id')->references('no_invoice')->on('transaksi');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
        Schema::dropIfExists('transaksi_detail');
    }
}
