<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_logs', function (Blueprint $table) {
            $table->id();
            $table->String('title')->nullable();
            $table->String('reps')->nullable();
            $table->String('minutes')->nullable();
            $table->String('cal_burn')->nullable();
            $table->String('protein_gain')->default('0');
            $table->String('fat_gain')->default('0');
            $table->String('cal_gain')->default('0');
            $table->String('carbohydrates_gain')->default('0');
            $table->String('video_url')->nullable();
            $table->String('description')->nullable();
            $table->String('category_id')->nullable();
            $table->String('caution')->nullable();
            $table->String('meal_time')->nullable();
            $table->String('weight')->nullable();
            $table->String('quantity')->nullable();
            $table->String('created_date');
            $table->String('created_by')->nullable();
            $table->String('user_id');
            $table->string('img_url')->nullable();
            $table->String('meal_id')->nullable();
            $table->String('exercise_id')->nullable();
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
        Schema::dropIfExists('user_logs');
    }
}
