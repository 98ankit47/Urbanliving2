<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFloorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('floors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('home_id');
            $table->integer('floor_no');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('dining');
            $table->integer('kitchen');
            $table->integer('garage');
            $table->string('image');
            $table->timestamps();

            $table->unique(array('home_id', 'floor_no'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('floors');
    }
}
