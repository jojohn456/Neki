<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('finance_tracker', function (Blueprint $table) {
            $table->bigInteger('id')->increments('id')->primary('id');
            $table->bigInteger('business_id');
            $table->string('item_name');
            $table->string('type');
            $table->double('amount');
            $table->date('date');
            $table->foreign('business_id')->references('id')->on('businesses');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('finance_tracker');
    }
};
