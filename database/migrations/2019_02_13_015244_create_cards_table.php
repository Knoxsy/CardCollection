<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cards', function (Blueprint $table) {
        $table->increments('id');
        $table->unsignedInteger('set_id');
        $table->string('name');
        $table->integer('card_number');
        $table->string('card_number_append')->nullable();
        $table->string('front_image')->nullable();
        $table->string('back_image')->nullable();
        $table->timestamps();
      });

      Schema::table('cards', function ($table) {
        $table->foreign('set_id')->references('id')->on('sets');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('cards');
    }
}
