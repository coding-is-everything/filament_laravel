<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('aayurveda_information', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('custId');
            $table->string('first_name', 255);
            $table->string('middle_name', 255)->nullable();
            $table->string('last_name', 255);
            $table->date('date_of_birth');
            $table->text('astroMsg');
            $table->string('place_of_birth', 255);
            $table->time('time_of_birth');
            $table->string('mobile_no', 255);
            $table->string('email', 255);
            $table->tinyInteger('send_email');
            $table->string('company_name', 255)->nullable();
            $table->string('gender', 255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aayurveda_information');
    }
};
