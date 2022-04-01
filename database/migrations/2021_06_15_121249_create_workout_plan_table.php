<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_plan', function (Blueprint $table) {
            $table->id();
            $table->String('title')->nullable();
            $table->longText('description')->nullable();
            $table->String('caution')->nullable();
            $table->String('price')->nullable();
            $table->String('trainer_id')->nullable();
            $table->String('cover_img')->nullable();
            $table->String('cover_video')->nullable();
            $table->String('difficulty_level')->nullable();
            $table->String('duration')->nullable();
            $table->String('category')->nullable();
            $table->String('muscle_type')->nullable();
            $table->String('version')->default('1.0');
            $table->longText('whats_new')->nullable();
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
        Schema::dropIfExists('workout_plan');
    }
}
