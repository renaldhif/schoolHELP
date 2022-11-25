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
        Schema::table('request_data', function (Blueprint $table) {
            //make the foreign keys nullable
            $table->unsignedBigInteger('user_id')->nullable()->change();
            $table->unsignedBigInteger('school_id')->nullable()->change();
            $table->unsignedBigInteger('student_level')->nullable()->change();
            $table->unsignedBigInteger('resource_category')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('request_data', function (Blueprint $table) {
            //
        });
    }
};