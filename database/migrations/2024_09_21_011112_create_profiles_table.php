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
        Schema::create('profiles', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('user_id');
            $table->string('first_name')->max(50)->nullable();
            $table->string('last_name')->max(50)->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('gender')->max(6)->nullable();
            $table->string('country')->max(50)->nullable();
            $table->string('city')->max(50)->nullable();
            $table->string('job_industry')->max(50)->nullable();
            $table->string('timezone')->max(50)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('profiles');
    }
};
