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
        Schema::create('project_site_installed_equipment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_site_id')->constrained()->cascadeOnDelete();
            $table->string('brand_name')->nullable();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('price')->nullable();
            $table->string('equipment_category');
            $table->string('equipment_type');
            $table->string('ownership_type');
            $table->string('serial_number')->nullable();
            $table->date('installation_date')->nullable();
            $table->string('equipment_status');
            $table->jsonb('specifications')->nullable();
            $table->string('image_path')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('project_site_installed_equipment');
    }
};
