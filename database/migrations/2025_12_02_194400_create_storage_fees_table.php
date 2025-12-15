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
        Schema::create('storage_fees', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('package_id')->constrained('packages')->onDelete('cascade');
            $table->date('free_period_end_date');
            $table->integer('overstay_days')->default(0);
            $table->decimal('daily_rate', 8, 2);
            $table->decimal('total_fee', 10, 2)->default(0);
            $table->foreignId('invoice_id')->nullable()->constrained('invoices')->nullOnDelete();
            $table->enum('status', ['PENDING', 'INVOICED', 'PAID'])->default('PENDING');            

            $table->index('package_id');
            $table->index('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('storage_fees');
    }
};
