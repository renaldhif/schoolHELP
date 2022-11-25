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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_id')->nullable()->constrained(); // fk school table
            $table->foreignId('request_id')->nullable()->constrained(); // fk request table
            $table->foreignId('offer_id')->nullable()->constrained(); // fk offer table
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('username');
            $table->string('password');
            $table->bigInteger('phone_number');
            $table->string('role')->default('volunteer');
            $table->string('staff_id')->nullable();
            $table->string('position')->nullable();
            $table->string('occupation')->nullable();
            $table->date('dob')->nullable();
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
};
