<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sets', function (Blueprint $table) {
        $table->increments('id');
        $table->string('genre')->nullable(false);  // i.e.  Baseball, Gaming, Non-Sports, the type of card
        $table->integer('year')->nullable(false);
        $table->string('brand')->nullable(false);  // i.e. Topps, Fleer, etc.  the manufacturer of the card
        // $table->string('type');
        $table->integer('count');  //total # of cards in the set
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
      Schema::dropIfExists('sets');
    }
}
