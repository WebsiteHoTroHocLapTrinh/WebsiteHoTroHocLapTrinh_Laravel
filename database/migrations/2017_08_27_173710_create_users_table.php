<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->integer('permission_id')->unsigned()->default('1');
            $table->string('name');
            $table->string('about');
            $table->string('location');
            $table->string('avatar');
            $table->integer('age');
            $table->string('job');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('point_reputation')->default('0');
            $table->boolean('active')->default(true);
            $table->boolean('checked')->default(false);
            $table->rememberToken();
            $table->timestamp('last_online');
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
        Schema::dropIfExists('users');
    }
}
