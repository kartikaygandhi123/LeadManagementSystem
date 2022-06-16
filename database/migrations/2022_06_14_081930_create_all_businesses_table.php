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
        Schema::create('all_businesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('all_businesses');
            // $table->int('active')->length(2);
            $table->unsignedBigInteger('org_id');
            $table->string('created_by')->length(50)->default('None');
            $table->string('updated_by')->length(50)->nullable();
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
        Schema::dropIfExists('all_businesses');
    }
};
