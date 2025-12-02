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
        Schema::create('warehouse_locations', function (Blueprint $table) {

            $table->id();
            $table->timestamps();

            $table->string('code', 20)->unique()->comment('e.g., A-01-B-03');
            $table->string('zone', 10);
            $table->string('rack', 10);
            $table->string('bay', 10);
            $table->string('shelf', 10);
            $table->boolean('is_occupied')->default(false);
       
            $table->index('code');
            $table->index('is_occupied');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warehouse_locations');
    }
};
