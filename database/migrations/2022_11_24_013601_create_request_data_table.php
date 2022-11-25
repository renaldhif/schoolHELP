<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('school_id');
            $table->foreign('school_id')->references('id')->on('schools');
            $table->date('request_date');
            $table->string('description');
            $table->dateTime('proposed_date');
            $table->unsignedBigInteger('student_level');
            $table->foreign('student_level')->references('id')->on('student_level_categories');
            $table->integer('student_number');
            $table->unsignedBigInteger('resource_category');
            $table->foreign('resource_category')->references('id')->on('resource_categories');
            $table->integer('resource_quantity');
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
        Schema::dropIfExists('request_data');
    }
};