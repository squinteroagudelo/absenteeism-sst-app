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
        Schema::create('incapacity_payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('incapacity_id');
            $table->decimal('paid_company')->default(0.0);
            $table->decimal('paid_eps')->default(0.0);
            $table->decimal('paid_arl')->default(0.0);
            $table->decimal('paid_afp')->default(0.0);
            $table->timestamps();

            /* creating constraint - FK */
            $table->foreign('incapacity_id')->references('id')->on('incapacities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incapacity_payments');
    }
};
