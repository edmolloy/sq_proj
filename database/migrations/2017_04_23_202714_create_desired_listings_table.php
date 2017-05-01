<!--

This page stores the Desired Listings table information and migrates information from Webdev to Laravel.

//-->


<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDesiredListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desired_listings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('sub_cat_id');
            $table->string('description_1');
            $table->string('description_2');
            $table->string('description_3');
            $table->string('description_4');
            $table->string('description_5');
        });

        Schema::table('desired_listings', function ($table) {
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('sub_cat_id')->references('id')->on('sub_categories')
                ->onUpdate('cascade');
            $table->engine = 'Innodb';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('desired_listings');
    }
}
