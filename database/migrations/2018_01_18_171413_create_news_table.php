<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('news', function (Blueprint $table) {

          $table->increments('id');
          $table->string('title');
          $table->text('summary');
          $table->string('content');
          $table->string('tags');
          $table->string('view_count');
          $table->string('like_count');
          $table->string('share_count');
          $table->string('is_featured');
          $table->string('is_active');
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
        //
    }
}
