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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('lastname', 50);
            $table->unsignedBigInteger('document_type_id');
            $table->string('document', 10);
            $table->decimal('salary');
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('eps_id');
            $table->unsignedBigInteger('arl_id');
            $table->unsignedBigInteger('afp_id');
            $table->timestamps();

            /* creating constraint - FK */
            $table->foreign('document_type_id')->references('id')->on('document_types')->onDelete('cascade');
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
            $table->foreign('eps_id')->references('id')->on('eps')->onDelete('cascade');
            $table->foreign('arl_id')->references('id')->on('arls')->onDelete('cascade');
            $table->foreign('afp_id')->references('id')->on('afps')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
