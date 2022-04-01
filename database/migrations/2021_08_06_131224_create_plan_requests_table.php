<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_requests', function (Blueprint $table) {
            $table->id();
            $table->String('trainer_id')->nullable();
            $table->String('trainee_id')->nullable();
            $table->String('status')->default('1');
            $table->String('price')->nullable();
            $table->String('category')->nullable();
            $table->String('created_date')->nullable();
            $table->string('payment_status')->default('0');

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
        Schema::dropIfExists('plan_requests');
    }
}
