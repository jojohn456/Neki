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
        Schema::create('users', function (Blueprint $table) {
            $table->bigInteger('id')->increments('id')->primary('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->string('mobile_token');
            $table->string('remtoken');
            $table->dateTime('remtoken_created_at', precision: 0);
            $table->string('mfa_token');
            $table->dateTime('mfa_token_created_at', precision: 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
