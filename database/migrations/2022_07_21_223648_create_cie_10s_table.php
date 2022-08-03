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
        Schema::create('cie_10s', function (Blueprint $table) {
            $table->id();
            $table->string('code', 4);
            $table->string('dx', 255);
            $table->unsignedBigInteger('dx_group_id');
            $table->unsignedBigInteger('dx_section_id');
            $table->timestamps();

            /* creating constraint - FK */
            $table->foreign('dx_group_id')->references('id')->on('dx_groups')->onDelete('cascade');
            $table->foreign('dx_section_id')->references('id')->on('ms_sections')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cie_10s');
    }
};
