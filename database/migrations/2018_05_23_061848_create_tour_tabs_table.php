<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTourTabsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tour_tabs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tab1_title');
            $table->string('tab1_image');
            $table->string('tab1_detail');
            $table->string('tab2_title');
            $table->string('tab2_image');
            $table->string('tab2_detail');
            $table->string('tab3_title');
            $table->string('tab3_image');
            $table->string('tab3_detail');
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
        Schema::dropIfExists('tour_tabs');
    }
}
