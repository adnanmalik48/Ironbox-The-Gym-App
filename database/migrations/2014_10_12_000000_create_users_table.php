<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('usertype')->default('admin');
            $table->string('phone')->nullable()->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('age');
            $table->string('gender');
            $table->string('height');
            $table->string('weight');
            $table->string('injury')->nullable();
            $table->string('medicalBackground')->nullable();
            $table->string('familyMedicalBackground')->nullable();
            $table->string('specializesIn')->nullable();
            $table->string('experience')->nullable();
            $table->string('workout')->default('0');
            $table->string('calories_burn')->default('0');
            $table->string('imgUrl')->nullable()->default('avatars/admin-avatar.png');
            $table->tinyInteger('isPremiumUser')->default('0');
            $table->tinyInteger('accountStatus')->default('0');
            $table->tinyInteger('is_trainer')->default('0');
            $table->tinyInteger('is_trainee')->default('0');
            $table->longText('access_token')->nullable();
            $table->longText('device_token')->nullable();
            $table->longText('description')->nullable();
            $table->string('price')->nullable();
            $table->string('videoUrl')->nullable();
            $table->string('specialisation_category')->nullable();
            $table->string('questionare_status')->default('0');
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
