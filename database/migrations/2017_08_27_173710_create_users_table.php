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
            $table->string('status')->nullable();
            $table->string('about')->nullable();
            $table->string('location')->nullable();
            $table->string('avatar')->nullable();
            $table->string('job')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('point_reputation')->default('0');
            $table->boolean('is_new')->default(true);
            $table->boolean('active')->default(true);
            $table->rememberToken();
            $table->timestamp('last_online')->nullable();;
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
