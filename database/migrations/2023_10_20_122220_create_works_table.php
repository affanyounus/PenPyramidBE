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
        Schema::create('works', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('project_id');
            $table->unsignedBigInteger('workflow_project_id');
            $table->string('title');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('project_id')->references('id')->on('projects')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreign('workflow_project_id')->references('id')->on('projects')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('works', function(Blueprint $table){
            $table->dropForeign(['project_id', 'workflow_project_id']);
        });
        Schema::dropIfExists('works');
    }
};
