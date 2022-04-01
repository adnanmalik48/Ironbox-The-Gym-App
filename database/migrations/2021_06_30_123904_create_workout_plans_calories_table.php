<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutPlansCaloriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_plans_calories', function (Blueprint $table) {
            $table->id();
            $table->String('lower_weight')->nullable();
            $table->String('upper_weight')->nullable();
            $table->String('calories')->nullable();
            $table->String('base_candidate')->nullable();
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
        Schema::dropIfExists('workout_plans_calories');
    }
}
