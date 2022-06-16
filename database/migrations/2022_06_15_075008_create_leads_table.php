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
        Schema::create('leads', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->string('zoho_lead_id')->nullable();
            $table->string('Customer Name')->nullable();
            $table->string('Contact Number')->length(50)->nullable();

            $table->string('POC Name')->nullable();
            $table->string('Industry')->nullable();
            $table->string('Lead Source')->nullable();

            $table->string('Email')->nullable();
            $table->string('First Contact Date')->nullable();

            $table->unsignedBigInteger('industry id')->length(3)->nullable();
            $table->unsignedBigInteger('lead source id')->length(3)->nullable();

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
        Schema::dropIfExists('leads');
    }
};
