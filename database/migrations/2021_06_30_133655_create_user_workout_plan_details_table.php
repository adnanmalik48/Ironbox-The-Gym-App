<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWorkoutPlanDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_workout_plan_details', function (Blueprint $table) {
            $table->id();
            $table->String('user_workout_plan_id')->nullable();
            $table->String('pre_workout_plan_details_id')->nullable();
            $table->String('day_title')->nullable();
            $table->String('min_calories')->nullable();
            $table->String('max_calories')->nullable();
            $table->String('avg_cal')->default('0');
            $table->String('cal_burn')->default('0');
            $table->String('day_number')->nullable();
            $table->String('week_number')->nullable();
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
        Schema::dropIfExists('user_workout_plan_details');
    }
}
