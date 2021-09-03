<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KategoriDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori_detail', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('kategori_id')->unsigned();
            $table->string('sub_kategori');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('kategori_id')->references('id')->on('kategori');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori_detail');
    }
}
