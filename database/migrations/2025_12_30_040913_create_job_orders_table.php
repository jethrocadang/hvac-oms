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
        Schema::create('job_orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignUuid('quotation_id')->constrained()->cascadeOnDelete();
            $table->foreignUuid('project_site_id')->constrained();
            $table->string('job_order_number')->unique();
            $table->date('scheduled_date');
            $table->string('estimated_duration');
            $table->string('status');
            $table->string('priority');
            $table->date('cancelled_at')->nullable();
            $table->text('cancel_reason')->nullable();
            $table->date('failed_at')->nullable();
            $table->text('fail_reason')->nullable();
            $table->date('date_completed')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_orders');
    }
};
