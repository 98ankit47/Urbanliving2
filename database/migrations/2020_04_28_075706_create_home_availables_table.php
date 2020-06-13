<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomeAvailablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_availables', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('home_id');
            $table->string('lat');
            $table->string('lng');
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
        Schema::dropIfExists('home_availables');
    }
}
