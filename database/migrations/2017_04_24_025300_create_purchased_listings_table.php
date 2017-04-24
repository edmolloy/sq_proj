<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasedListingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchased_listings', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->unsignedInteger('seller_id');
            $table->unsignedInteger('buyer_id');
            $table->unsignedInteger('sub_cat_id');
            $table->float('price');
            $table->string('title');
            $table->text('description');
        });

        Schema::table('purchased_listings', function ($table) {
            $table->primary('id');
            $table->foreign('seller_id')->references('id')->on('users')
                ->onDelete('SET NULL')->change();
            $table->foreign('buyer_id')->references('id')->on('users')
                ->onDelete('cascade')->change();
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
        Schema::dropIfExists('purchased_listings');
    }
}
