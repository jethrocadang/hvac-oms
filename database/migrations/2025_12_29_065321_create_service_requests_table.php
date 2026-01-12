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
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_site_id')->constrained();
            $table->foreignId('requested_by')->nullable()->constrained('users')->nullOnDelete();
            $table->string('service_request_type')->index();
            $table->text('description')->nullable();
            $table->text('important_notes')->nullable();
            $table->string('priority')->index();
            $table->string('status')->index();
            $table->timestamps();
            $table->softDeletes();

            $table->index(['project_site_id', 'status']);
            $table->index(['priority', 'status']);

            $table->index('created_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};
