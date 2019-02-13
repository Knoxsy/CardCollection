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
            //$table->foreign('set_id')->references('id')->on('sets');  //FK
            $table->string('name')->nullable(false);
            $table->string('card_number'); // this is a string becuase some cards have numbers and letters
            $table->string('front_image');
            $table->string('back_image');
            $table->string('condition'); //the condition that the card is in
            // $table->longText('notes'); long text for things longer than a string
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
