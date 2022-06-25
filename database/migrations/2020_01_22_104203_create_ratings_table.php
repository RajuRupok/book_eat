<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratings', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('user_id')
                  ->unsigned()
                  ->default(4);
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->bigInteger('res_id')
                  ->unsigned()
                  ->default(4);
            $table->foreign('res_id')
                  ->references('id')
                  ->on('restaurants')
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
        Schema::dropIfExists('ratings');


        Schema::table("ratings", function ($table) {
            $table->dropSoftDeletes();
        });
    }
}
