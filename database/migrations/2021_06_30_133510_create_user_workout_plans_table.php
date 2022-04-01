<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWorkoutPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_workout_plans', function (Blueprint $table) {
            $table->id();
            $table->String('user_id')->nullable();
            $table->String('plan_id')->nullable();
            $table->String('title')->nullable();
            $table->longText('description')->nullable();
            $table->String('caution')->nullable();
            $table->String('price')->nullable();
            $table->String('trainer_id')->nullable();
            $table->String('cover_img')->nullable();
            $table->String('cover_video')->nullable();
            $table->String('difficulty_level')->nullable();
            $table->String('duration')->nullable();
            $table->String('muscle_type')->nullable();
            $table->String('category_id')->nullable();
            $table->String('review_status')->default('0');
            $table->String('progress')->default('0');
            $table->String('version')->default('1.0');
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
        Schema::dropIfExists('user_workout_plans');
    }
}
