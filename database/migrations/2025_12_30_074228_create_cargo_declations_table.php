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
        Schema::create('cargo_declations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->foreignId('warehouse_location_id')->nullable()->constrained('warehouse_locations')->cascadeOnDelete();
            $table->string('internal_curier')->nullable();
            $table->string('tracking_number')->nullable();
            $table->text('cargo_details');
            $table->string('value');
            $table->string('weight')->nullable();
            $table->enum('status',['pending','received','declined'])->default('pending');
            $table->json('files')->nullable();
            $table->foreignId('user_id')->constrained('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cargo_declations');
    }
};
