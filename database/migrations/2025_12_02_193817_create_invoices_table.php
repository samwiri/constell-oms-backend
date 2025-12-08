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
        Schema::create('invoices', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            
            $table->string('invoice_number', 50)->unique();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('order_id')->nullable()->constrained('orders')->nullOnDelete();
            $table->enum('type', ['FREIGHT', 'STORAGE', 'CUSTOMS', 'OTHER']);                   
            $table->enum('status', ['UNPAID', 'PAID', 'OVERDUE', 'CANCELLED'])->default('UNPAID');
            $table->date('due_date')->nullable();         
            
            $table->index('invoice_number');
            $table->index('user_id');
            $table->index('status');
            $table->index('due_date');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
