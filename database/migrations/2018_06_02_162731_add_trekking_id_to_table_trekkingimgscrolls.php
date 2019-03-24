<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTrekkingIdToTableTrekkingimgscrolls extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('trekkingimg_scrolls', function (Blueprint $table) {
            $table->string('Trekking_id')->after('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('trekkingimg_scrolls', function (Blueprint $table) {
            $table->dropColumn('Trekking_id');
        });
    }
}
