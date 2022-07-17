<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoryArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('history_articles', function (Blueprint $table) {
          $table->id();
          $table->string('title', 255);
          $table->text('text')->nullable();
          $table->tinyInteger('publish')->default(1);
          $table->tinyInteger('order')->default(-1);
          $table->foreignId('history_id')->constrained();
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
        Schema::dropIfExists('history_articles');
    }
}
