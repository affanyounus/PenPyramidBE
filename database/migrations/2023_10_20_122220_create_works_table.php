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
            $table->unsignedBigInteger('workflow_id');
            $table->string('title');
            $table->timestamps();
            $table->softDeletes();
            $table->unsignedBigInteger('created_by')->nullable(false);
            $table->unsignedBigInteger('updated_by')->nullable(false);


            $table->foreign('project_id')->references('id')->on('projects')
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->foreign('workflow_id')->references('id')->on('projects')
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
//            refered from mysql database
            $table->dropForeign('works_project_id_foreign');
            $table->dropForeign('works_workflow_id_foreign');
        });
        Schema::dropIfExists('works');
    }
};
