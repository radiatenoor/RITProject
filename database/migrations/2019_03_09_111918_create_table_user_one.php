<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUserOne extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_one', function (Blueprint $table) {
            $table->increments("id");
            $table->string("full_name");
            $table->string("email")->unique();
            $table->string("password");
            $table->string("gender");
            $table->string("check_me");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("user_one");
    }
}
