<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomDietPlanDayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_diet_plan_day', function (Blueprint $table) {
            $table->id();
            $table->String('plan_id')->nullable();
            $table->String('week_number')->nullable();
            $table->longText('day_number')->nullable();
            $table->String('total_meals')->default('0');
            $table->String('progress')->default('0');
            $table->String('total_protein')->default('0');
            $table->String('total_fat')->default('0');
            $table->String('total_calories')->default('0');
            $table->String('total_carbohydrates')->default('0');
            $table->String('protein_gain')->default('0');
            $table->String('fat_gain')->default('0');
            $table->String('calories_gain')->default('0');
            $table->String('carbohydrates_gain')->default('0');
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
        Schema::dropIfExists('custom_diet_plan_day');
    }
}
