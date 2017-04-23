<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsOnWatchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('listings_on_watch', function (Blueprint $table) {
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('listing_id');
        });

        Schema::table('listings_on_watch', function ($table) {
            $table->primary(['user_id', 'listing_id']);
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('listing_id')->references('id')->on('listings')
                ->onDelete('cascade');

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('listings_on_watch');
    }
}
