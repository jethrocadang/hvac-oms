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
        Schema::create('service_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_order_id')->constrained()->cascadeOnDelete();
            $table->foreignId('prepared_by')->constrained('users');
            $table->foreignId('client')->constrained('users')->nullable();
            $table->date('service_date');
            $table->time('time_in');
            $table->time('time_out');
            $table->text('work_done');
            $table->text('findings')->nullable();
            $table->boolean('safety_compliance');
            $table->string('client_signature')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_reports');
    }
};
