<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWorkoutPlanExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_workout_plan_exercises', function (Blueprint $table) {
            $table->id();
            $table->String('user_workout_plan_game_id')->nullable();
            $table->String('name')->nullable();
            $table->String('reps')->nullable();
            $table->String('duration')->nullable();
            $table->String('video_url')->nullable();
            $table->String('description')->nullable();
            $table->tinyInteger('status')->default('0');
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
        Schema::dropIfExists('user_workout_plan_exercises');
    }
}
