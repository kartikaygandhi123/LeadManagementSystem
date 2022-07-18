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
        Schema::create('legal_remarks', function (Blueprint $table) {
            $table->id();
            $table->string('lead_id')->nullable();
            $table->string('nda')->nullable();
            $table->string('customer_agreement')->nullable();
            $table->string('commercial')->nullable();
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
        Schema::dropIfExists('legal_remarks');
    }
};
