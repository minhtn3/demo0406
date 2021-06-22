<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyContraintsToJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->foreign('parent_id')->references('id')->on('jobs')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('job_type_id')->references('id')->on('job_types')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('project_id')->references('id')->on('projects')->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreign('priority_id')->references('id')->on('priorities')->cascadeOnUpdate()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropConstrainedForeignId('parent_id');
            $table->dropConstrainedForeignId('job_type_id');
            $table->dropConstrainedForeignId('project_id');
            $table->dropConstrainedForeignId('priority_id');
        });
    }
}
