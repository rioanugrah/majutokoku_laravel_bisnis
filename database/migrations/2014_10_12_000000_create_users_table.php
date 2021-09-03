<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('socialite_id')->nullable();
            $table->string('socialite_name')->nullable();
            $table->string('profile')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->integer('role')->unsigned()->default(1);
            $table->string('api_token',80)->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->dateTime('last_seen')->nullable();
            $table->softDeletes();
            // $table->foreign('role')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
        // Schema::table('users', function (Blueprint $table) {
        //     $table->timestamp('last_seen');
        // });
        // Schema::table('users', function (Blueprint $table) {
        //     $table->dropColumn('socialite_id');
        //     $table->dropColumn('socialite_name');
        //     $table->dropColumn('profile');
        // });
    }
}
