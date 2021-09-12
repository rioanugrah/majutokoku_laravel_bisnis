<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Menu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('menu');
            $table->string('slug');
            $table->integer('role_id')->unsigned();
            $table->string('icon_menu');
            // $table->bigInteger('user_id')->unsigned();
            // $table->string('c', 5);
            // $table->string('r', 5);
            // $table->string('u', 5);
            // $table->string('d', 5);
            $table->enum('c', array('Y','N'))->default('N');
            $table->enum('r', array('Y','N'))->default('N');
            $table->enum('u', array('Y','N'))->default('N');
            $table->enum('d', array('Y','N'))->default('N');
            $table->timestamps();
            $table->softDeletes();
            // $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menu');
    }
}
