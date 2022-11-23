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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained(); // fk users table
            $table->foreignId('request_id')->nullable()->constrained(); // fk requests table
            $table->string('remarks');
            $table->string('offer_status')->default('pending');
            $table->date('offer_proposed');
            $table->date('offer_accepted');
            $table->date('offer_closed');
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
        Schema::dropIfExists('Offers');
    }
};
