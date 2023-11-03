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
        Schema::create('monthly_details', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('newUsers');
            $table->integer('deposits');
            $table->integer('dispensing');
            $table->integer('numffpeople');
            $table->integer('numapeople');
            $table->integer('orderquant');
            $table->integer('custprofitloss');
            $table->integer('runningwater');
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
        Schema::dropIfExists('monthly_details');
    }
};
