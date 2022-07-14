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
        Schema::create('lead_logs', function (Blueprint $table) {
            $table->id();
            $table->string('lead_id')->nullable();
            $table->string('lead_status')->nullable();

            $table->string('lead_created_at')->nullable();
            $table->string('lead_updated_at')->nullable();
            $table->string('lead_created_by')->nullable();
            $table->string('lead_updated_by')->nullable();
            $table->string('follow_up_scheduled_date')->nullable();
            $table->string('follow_up_date')->nullable();
            $table->string('followed_up_date')->nullable();
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
        Schema::dropIfExists('lead_logs');
    }
};
