<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutPlanGameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_plan_game', function (Blueprint $table) {
            $table->id();
            $table->String('workout_plan_details_id')->nullable();
            $table->String('name')->nullable();
            $table->String('sets')->nullable();
            $table->String('rounds')->nullable();
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
        Schema::dropIfExists('workout_plan_game');
    }
}
