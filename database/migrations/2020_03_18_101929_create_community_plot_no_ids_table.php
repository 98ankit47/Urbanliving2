<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommunityPlotNoIdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('community_plot_no_ids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('community_id');
            $table->integer('plot_no_id');
            $table->integer('plot_Id_id');
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
        Schema::dropIfExists('community_plot_no_ids');
    }
}
