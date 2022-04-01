<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWorkoutPlanGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_workout_plan_games', function (Blueprint $table) {
            $table->id();
            $table->String('user_workout_plan_details_id')->nullable();
            $table->String('pre_workout_plan_games_id')->nullable();
            $table->String('name')->nullable();
            $table->String('sets')->nullable();
            $table->String('rounds')->nullable();
            $table->String('progress')->default('0');
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
        Schema::dropIfExists('user_workout_plan_games');
    }
}
