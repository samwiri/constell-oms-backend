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
        Schema::create('invoice_line_items', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreignId('invoice_id')->constrained('invoices')->onDelete('cascade');
            $table->string('description');
            $table->integer('quantity');
            $table->double('unit_price');
            
            $table->index('invoice_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoice_line_items');
    }
};
