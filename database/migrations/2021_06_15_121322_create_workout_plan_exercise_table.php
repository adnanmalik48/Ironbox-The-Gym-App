<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutPlanExerciseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_plan_exercise', function (Blueprint $table) {
            $table->id();
            $table->String('game_id')->nullable();
            $table->String('name')->nullable();
            $table->String('reps')->nullable();
            $table->String('duration')->nullable();
            $table->String('video_url')->nullable();
            $table->String('description')->nullable();
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
        Schema::dropIfExists('workout_plan_exercise');
    }
}
