<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('creator_id')
                  ->unsigned()
                  ->default(4);
            $table->foreign('creator_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->bigInteger('cat_id')
                ->unsigned()
                ->default(4);
            $table->foreign('cat_id')
                ->references('id')
                ->on('categories')
                ->onDelete('cascade');


            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');


        Schema::table("restaurants", function ($table) {
            $table->dropSoftDeletes();
        });
    }
}
