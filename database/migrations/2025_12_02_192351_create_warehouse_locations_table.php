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
            $table->softDeletes();

            $table->string('code')->unique()->comment('e.g., A-01-B-03');
            $table->string('zone')->nullable();
            $table->string('rack')->nullable();
            $table->string('bay')->nullable();
            $table->string('shelf')->nullable();
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
