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
        Schema::create('customs_clearances', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->decimal('original_value', 10, 2);
            $table->decimal('reassessed_value', 10, 2)->nullable();
            $table->decimal('duty_rate', 5, 2)->default(0)->comment('Duty rate as percentage');
            $table->decimal('duty_amount', 10, 2)->default(0);
            $table->decimal('vat_rate', 5, 2)->default(18)->comment('VAT rate as percentage');
            $table->decimal('vat_amount', 10, 2)->default(0);
            $table->decimal('other_fees', 10, 2)->default(0);
            $table->decimal('total_customs_fees', 10, 2)->default(0);
            $table->foreignId('invoice_id')->nullable()->constrained('invoices')->nullOnDelete();

            $table->enum('status', ['PENDING', 'CLEARED', 'HELD'])->default('PENDING');
            $table->text('notes')->nullable();
            $table->foreignId('cleared_by')->nullable()->constrained('user')->nullOnDelete();
            $table->timestamp('cleared_at')->nullable();
            
            
            $table->index('order_id');
            $table->index('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customs_clearances');
    }
};
