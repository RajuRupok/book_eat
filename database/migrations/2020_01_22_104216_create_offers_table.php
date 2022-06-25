<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOffersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('offers', function (Blueprint $table) {
            $table->bigIncrements('id');

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
        Schema::dropIfExists('offers');


        Schema::table("offers", function ($table) {
            $table->dropSoftDeletes();
        });
    }
}
