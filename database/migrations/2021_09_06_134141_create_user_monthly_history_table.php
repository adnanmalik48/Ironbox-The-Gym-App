<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMonthlyHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_monthly_history', function (Blueprint $table) {
            $table->id();
            $table->String('user_id')->nullable();
            $table->longText('date')->nullable();
            $table->String('cal_burn')->nullable();
            $table->String('protein_gain')->nullable();
            $table->String('fat_gain')->nullable();
            $table->String('calories_gain')->nullable();
            $table->String('carbohydrates_gain')->nullable();
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
        Schema::dropIfExists('user_monthly_history');
    }
}
