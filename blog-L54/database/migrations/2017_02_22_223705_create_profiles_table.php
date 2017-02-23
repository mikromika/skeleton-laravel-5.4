<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('profiles', function (Blueprint $table) {
          $table->increments('id');
          $table->string('firstname');
          $table->string('lastname');
          $table->string('email');
          $table->string('phone')->nullable();
          $table->string('mobile')->nullable();
          $table->string('address')->nullable();
          $table->string('postcode')->nullable();
          $table->string('city')->nullable();
          $table->string('municipality')->nullable();
          $table->string('location')->nullable();
          $table->integer('user_id')->unsigned()->default(0);
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('profiles');
    }
}
