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
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('org_handler_id'); //who created this organization
            $table->string('name');
            $table->string('address');
            $table->string('country');
            $table->string('office_phone');
            $table->string('fax');
            $table->string('website');
            $table->timestamps();


            $table->foreign('org_handler_id')->references('id')->on('users');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('organizations');
    }
};
