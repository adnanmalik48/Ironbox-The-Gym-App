<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTrainersSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_trainers_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->String('trainer_id')->nullable();
            $table->String('trainee_id')->nullable();
            $table->String('start_date')->nullable();
            $table->String('end_date')->nullable();
            $table->String('sub_price')->nullable();
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
        Schema::dropIfExists('user_trainers_subscriptions');
    }
}
