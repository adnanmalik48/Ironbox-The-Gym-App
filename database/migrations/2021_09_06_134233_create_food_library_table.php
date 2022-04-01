<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFoodLibraryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('food_library', function (Blueprint $table) {
            $table->id();
            $table->String('name')->nullable();
            $table->String('quantity')->nullable();
            $table->String('weight')->nullable();
            $table->String('added_by')->nullable();
            $table->String('category_id')->nullable();
            $table->String('image')->nullable()->default('FoodImages/error-image-generic.png');
            $table->longText('description')->nullable();
            $table->String('caution')->nullable();
            $table->String('protein_gain')->default('0');
            $table->String('fat_gain')->default('0');
            $table->String('calories_gain')->default('0');
            $table->String('carbohydrates_gain')->default('0');
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
        Schema::dropIfExists('food_library');
    }
}
