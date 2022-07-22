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
        Schema::create('lead_executed_agreements', function (Blueprint $table) {
            $table->id();
            $table->integer('lead_id')->nullable;
            $table->integer('user_id')->nullable;

            $table->string('remarks')->nullable();
            $table->string('document_upload')->nullable();
            $table->string('start_date')->nullable();
            $table->string('expiry_date')->nullable();
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
        Schema::dropIfExists('lead_executed_agreements');
    }
};
