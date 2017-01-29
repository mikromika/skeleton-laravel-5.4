<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfileUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

     public function up()
     {
      Schema::create('profile_users', function (Blueprint $table) {

        //  //'profile_id', 'user_id'

           $table->increments('id');
           $table->unsignedInteger('profile_id');
           $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('profile_users');  //
    }
}
