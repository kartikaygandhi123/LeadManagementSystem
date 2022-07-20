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
        Schema::create('brand_profiles', function (Blueprint $table) {
            $table->id();

            $table->string('Customer_Name')->nullable();
            $table->string('Contact_Number')->length(50)->nullable();

            $table->string('POC_Name')->nullable();
            $table->string('Industry')->nullable();

            $table->string('Email')->nullable();
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
        Schema::dropIfExists('brand_profiles');
    }
};
