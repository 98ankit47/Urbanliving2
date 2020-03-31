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
            $table->integer('community_id');
            $table->integer('home_id');
            $table->integer('plot_no');
            $table->integer('floor_no');
            $table->integer('bedroom');
            $table->integer('bathroom');
            $table->integer('dining');
            $table->integer('kitchen');
            $table->integer('garage');
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
        Schema::dropIfExists('floors');
    }
}
