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
        Schema::create('projectasks', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('portfolio_id');
            $table->uuid('project_id');
            $table->uuid('projectbaseline_id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->dateTime('due_date');
            $table->timestamps();

            $table->foreign('portfolio_id')->references('id')->on('portfolios');
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('projectbaseline_id')->references('id')->on('projectbaselines');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projectasks');
    }
};
