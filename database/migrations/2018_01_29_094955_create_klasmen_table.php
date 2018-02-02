<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKlasmenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('klasmen', function (Blueprint $table) {

          $table->increments('id');
          $table->string('liga');
          $table->string('klub');
          $table->string('images');
          $table->string('main');
          $table->string('menang');
          $table->string('seri');
          $table->string('kalah');
          $table->string('goal_cetak');
          $table->string('goal_masuk');
          $table->string('poin');
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
        Schema::dropIfExists('klasmen');
    }
}
