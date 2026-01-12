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
        Schema::create('project_sites_survey', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('service_request_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('surveyed_by')->constrained('users');
            $table->dateTime('survey_date');
            $table->text('findings');
            $table->text('recommendations');
            $table->jsonb('image_paths');
            $table->timestamps();
            $table->softDeletes();

            $table->index('service_request_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_sites_survey');
    }
};
