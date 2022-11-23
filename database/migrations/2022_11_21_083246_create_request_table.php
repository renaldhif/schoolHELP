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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained(); // fk users table
            $table->foreignId('school_id')->nullable()->constrained(); // fk schools table
            $table->date('request_date');
            $table->string('request_status')->default('new');
            $table->string('description');
            $table->date('proposed_date');
            $table->string('student_level');
            $table->integer('student_number');
            $table->string('resource_category');
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
        Schema::dropIfExists('request');
    }
};
