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
        Schema::create('incapacities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('incapacity_type_id');
            $table->unsignedBigInteger('employee_id');
            $table->unsignedBigInteger('cie_10_id');
            $table->date('start_day');
            $table->date('end_day');
            $table->unsignedBigInteger('incapacity_kind_id');
            $table->decimal('paid_company')->default(0.0);
            $table->decimal('paid_eps')->default(0.0);
            $table->decimal('paid_arl')->default(0.0);
            $table->decimal('paid_afp')->default(0.0);
            $table->timestamps();

            /* creating constraint - FK */
            $table->foreign('incapacity_type_id')->references('id')->on('incapacity_types')->onDelete('cascade');
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');
            $table->foreign('cie_10_id')->references('id')->on('cie_10s')->onDelete('cascade');
            $table->foreign('incapacity_kind_id')->references('id')->on('incapacity_kinds')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incapacities');
    }
};
