<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Reservations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function(Blueprint $table) {

            $table->increments('id');
            $table->integer('place_id');
            $table->foreign('place_id')->references('id')->on('places');
            $table->integer('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->date('date_debut');
            $table->date('date_fin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
