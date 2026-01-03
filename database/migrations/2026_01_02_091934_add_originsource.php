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
        Schema::table('consolidation_batches', function (Blueprint $table) {
            $table->string('origin_country')->nullable();
            $table->string('destination_country')->nullable();
            $table->foreignId('warehouse_location_id')->nullable()->constrained('warehouse_locations')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consolidation_batches', function (Blueprint $table) {
            $table->dropColumn('origin_country');
            $table->dropColumn('destination_country');
            $table->dropForeign(['warehouse_location_id']);
            $table->dropColumn('warehouse_location_id');
        });
    }
};
