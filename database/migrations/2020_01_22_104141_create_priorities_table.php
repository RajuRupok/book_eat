<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrioritiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('priorities', function (Blueprint $table) {
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
        Schema::dropIfExists('priorities');


        Schema::table("priorities", function ($table) {
            $table->dropSoftDeletes();
        });
    }
}
