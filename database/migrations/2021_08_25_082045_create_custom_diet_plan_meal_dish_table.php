<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomDietPlanMealDishTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_diet_plan_meal_dish', function (Blueprint $table) {
            $table->id();
            $table->String('name')->nullable();
            $table->String('meal_id')->nullable();
            $table->String('quantity')->nullable();
            $table->longText('description')->nullable();
            $table->String('weight')->nullable();
            $table->String('image')->nullable();
            $table->String('protein')->nullable();
            $table->String('calories')->nullable();
            $table->String('fat')->nullable();
            $table->String('carbohydrates')->nullable();
            $table->String('caution')->nullable();
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
        Schema::dropIfExists('custom_diet_plan_meal_dish');
    }
}
