<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MenuKategori extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_kategori', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('menu_kategori');
            $table->bigInteger('menu_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('menu_id')->references('id')->on('menu');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu_kategori');
    }
}
