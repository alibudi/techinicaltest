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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('package_name');
            $table->string('price_per_month');
            $table->string('diskon');
            $table->string('max_users');
            $table->string('charge_users');
            $table->string('max_class_options');
            $table->string('class_update_frequency');
            $table->string('certificate_included');
            $table->string('free_consultation');
            $table->string('dedicated_assistant');
            $table->string('full_support');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
