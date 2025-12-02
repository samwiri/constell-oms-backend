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
        Schema::create('payments', function (Blueprint $table) {

            $table->id();
            $table->timestamps();
                     
            $table->foreignId('invoice_id')->constrained('invoices')->onDelete('cascade');
            $table->decimal('amount', 10, 2);
            $table->enum('method', ['MOBILE_MONEY', 'CARD', 'BANK_TRANSFER','CASH']);
            $table->string('transaction_reference')->nullable();
            $table->string('gateway_reference')->nullable();
            $table->enum('status', ['PENDING', 'COMPLETED', 'FAILED'])->default('COMPLETED');
            $table->timestamp('paid_at');            

            $table->index('invoice_id');
            $table->index('transaction_reference');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
