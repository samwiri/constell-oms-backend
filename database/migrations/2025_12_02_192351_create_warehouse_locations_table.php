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

            $table->string('code')->unique();
            $table->string('name')->nullable();
            $table->string('address')->nullable();
            $table->string('manager')->nullable();
            $table->boolean('active')->default(true);
            $table->string('rack_count')->nullable();
            $table->string('country')->nullable();

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
