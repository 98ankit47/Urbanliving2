<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('description');
            $table->string('bedroom');
            $table->string('bathroom');
            $table->string('garage');
            $table->string('stories');
            $table->integer('area');
            $table->string('builder');
            $table->string('featured_image');
            $table->string('gallery');
            $table->string('lat');
            $table->string('lng');
            $table->integer('price');
            $table->string('slug')->unique();
            $table->integer('block');
            $table->integer('status_id');
            $table->timestamps();

            $table->unique(array('lat', 'lng'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homes');
    }
}
