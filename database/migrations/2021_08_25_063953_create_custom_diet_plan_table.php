<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomDietPlanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_diet_plan', function (Blueprint $table) {
            $table->id();
            $table->String('title')->nullable();
            $table->String('difficulty_level')->nullable();
            $table->longText('description')->nullable();
            $table->String('duration')->nullable();
            $table->String('goal')->nullable();
            $table->String('caution')->nullable();
            $table->String('request_id')->nullable();
            $table->String('trainee_id')->nullable();
            $table->String('trainer_id')->nullable();
            $table->String('cover_image')->nullable();
            $table->String('total_protein')->default('0');
            $table->String('total_fat')->default('0');
            $table->String('total_calories')->default('0');
            $table->String('total_carbohydrates')->default('0');
            $table->String('protein_gain')->default('0');
            $table->String('fat_gain')->default('0');
            $table->String('calories_gain')->default('0');
            $table->String('carbohydrates_gain')->default('0');
            $table->String('version')->default('1.0');
            $table->String('progress')->default('0');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('is_edited')->default('0');
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
        Schema::dropIfExists('custom_diet_plan');
    }
}
