<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomDietPlanMealTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_diet_plan_meal', function (Blueprint $table) {
            $table->id();
            $table->String('title')->nullable();
            $table->String('detail_id')->nullable();
            $table->String('total_protein')->default('0');
            $table->String('total_fat')->default('0');
            $table->String('total_calories')->default('0');
            $table->String('total_carbohydrates')->default('0');
            $table->String('protein_gain')->default('0');
            $table->String('fat_gain')->default('0');
            $table->String('calories_gain')->default('0');
            $table->String('carbohydrates_gain')->default('0');
            $table->String('time')->nullable();
            $table->String('progress')->default('0');
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
        Schema::dropIfExists('custom_diet_plan_meal');
    }
}
