<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     
    public function up(): void
    {
        Schema::create('warehouse_racks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            $table->string('zone_name');
            $table->integer('bin_start')->nullable();
            $table->integer('bin_end')->nullable();
            $table->integer('capacity')->nullable();
            $table->enum('type',["SHELF", "PALLET", "COLD", "FRAGILE"]);
            $table->foreignId('warehouse_location_id')->constrained('warehouse_locations')->cascadeOnDelete();
        });
    }

   
    public function down(): void
    {
        Schema::dropIfExists('warehouse_racks');
    }
};
