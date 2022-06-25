<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('role_id')
                  ->unsigned()
                  ->default(4);

            $table->foreign('role_id')
                  ->references('id')
                  ->on('roles')
                  ->onDelete('cascade');

            $table->string('name');

            $table->string('username',60)->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            // $table->binary('avatar')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();

            $table->tinyInteger('status')->default(1);

            $table->rememberToken();
            $table->timestamps();

            $table->softDeletes();
        });

        DB::statement("ALTER TABLE users ADD avatar MEDIUMBLOB after password");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');

        Schema::table("users", function ($table) {
            $table->dropSoftDeletes();
        });
    }
}
