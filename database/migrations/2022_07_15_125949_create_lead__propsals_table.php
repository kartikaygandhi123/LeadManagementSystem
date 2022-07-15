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
        Schema::create('lead__propsals', function (Blueprint $table) {
            $table->id();
            $table->string('lead_id')->nullable();
            $table->string('proposal_documents')->nullable();
            $table->string('reason_for_changing_proposal')->nullable();
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
        Schema::dropIfExists('lead__propsals');
    }
};
