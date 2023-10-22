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
        Schema::table('workflows', function (Blueprint $table) {

            $table->unsignedBigInteger('project_id')->after('id')->nullable(false);
            $table->foreign('project_id')->references('id')->on('projects')
            ->cascadeOnUpdate()
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('workflows', function (Blueprint $table){

            $table->dropForeign('workflows_project_id_foreign');
            $table->dropColumn('project_id');
        });
    }
};
