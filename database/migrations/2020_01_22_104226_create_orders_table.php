<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
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

            $table->bigInteger('offer_id')
                    ->unsigned()
                    ->default(4);
            $table->foreign('offer_id')
                    ->references('id')
                    ->on('offers')
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
        Schema::dropIfExists('orders');


        Schema::table("orders", function ($table) {
            $table->dropSoftDeletes();
        });
    }
}
