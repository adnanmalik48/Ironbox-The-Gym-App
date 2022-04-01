<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserRatingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_ratings', function (Blueprint $table) {
            $table->id();
            $table->String('user_id');
            $table->String('one_star')->default('0');
            $table->String('two_star')->default('0');
            $table->String('three_star')->default('0');
            $table->String('four_star')->default('0');
            $table->String('five_star')->default('0');
            $table->String('rating_count')->default('0');
            $table->String('avg_rating')->default('0.0');
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
        Schema::dropIfExists('user_ratings');
    }
}
