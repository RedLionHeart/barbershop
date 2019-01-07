<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tovars extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tovars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('small_title');
            $table->string('slug')->unique();
            $table->integer('parent_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->double('value');
            $table->text('pict_way');
            $table->string('available');
            $table->text('description');
            $table->integer('maker_id');
            $table->string('articul');
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
        Schema::dropIfExists('tovars');
    }
}
