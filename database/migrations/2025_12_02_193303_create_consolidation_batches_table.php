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
        Schema::create('consolidation_batches', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->softDeletes();

            $table->string('mawb_number', 50)->unique()->comment('Master Airway Bill Number');
            $table->enum('transport_mode', ['AIR', 'SEA', 'ROAD', 'TRAIN']);
            $table->string('container_flight_number');
            $table->date('departure_date');
            $table->enum('status', ['OPEN', 'FINALIZED', 'DEPARTED', 'ARRIVED'])->default('OPEN');

            $table->integer('package_count')->default(0);
            $table->decimal('total_weight', 10, 2)->default(0);
            $table->foreignId('created_by')->constrained('users');
            $table->timestamp('finalized_at')->nullable();
            $table->timestamp('departed_at')->nullable();
            $table->timestamp('arrived_at')->nullable();            

            $table->index('mawb_number');
            $table->index('status');
            $table->index('departure_date');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('consolidation_batches');
    }
};
