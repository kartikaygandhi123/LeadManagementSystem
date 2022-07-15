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
        Schema::table('requirements_maps', function (Blueprint $table) {
            //

            $table->string('lead_id')->nullable();
            $table->string('business_requirement')->nullable();
            $table->string('upload_requirement_documents')->nullable();
            $table->string('lob')->nullable();
            $table->string('services')->nullable();
            $table->string('area')->nullable();
            $table->string('expected_closure_date')->nullable();
            $table->string('location')->nullable();
            $table->string('business_type')->nullable();
            $table->string('expected_monthly_revenue')->nullable();
            $table->string('expected_capex')->nullable();
            $table->string('ebdta_percentage')->nullable();
            $table->string('ebdta_amount')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('requirements_maps', function (Blueprint $table) {
            $table->string('lead_id')->nullable();
            $table->string('business_requirement')->nullable();
            $table->string('upload_requirement_documents')->nullable();
            $table->string('lob')->nullable();
            $table->string('services')->nullable();
            $table->string('area')->nullable();
            $table->string('expected_closure_date')->nullable();
            $table->string('location')->nullable();
            $table->string('business_type')->nullable();
            $table->string('expected_monthly_revenue')->nullable();
            $table->string('expected_capex')->nullable();
            $table->string('ebdta_percentage')->nullable();
            $table->string('ebdta_amount')->nullable();
        });
    }
};
