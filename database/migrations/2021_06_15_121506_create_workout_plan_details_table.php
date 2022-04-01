<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutPlanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_plan_details', function (Blueprint $table) {
            $table->id();
            $table->String('plan_id')->nullable();
            $table->String('day_title')->nullable();
            $table->String('min_calories')->nullable();
            $table->String('max_calories')->nullable();
            $table->String('day_number')->nullable();
            $table->String('week_number')->nullable();
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
        Schema::dropIfExists('workout_plan_details');
    }
}
