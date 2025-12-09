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
        Schema::create('delivery_orders', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->softDeletes();

            $table->string('delivery_number', 50)->unique();
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->foreignId('rider_id')->nullable()->constrained('user')->nullOnDelete();
            $table->text('delivery_address');
            $table->date('delivery_date');
            
            $table->enum('status', ['PENDING', 'ASSIGNED', 'OUT_FOR_DELIVERY', 'DELIVERED', 'FAILED'])->default('PENDING');
            $table->text('pod_signature')->nullable()->comment('Proof of Delivery - Base64 signature');

            $table->string('pod_photo_path')->nullable();
            $table->text('delivery_notes')->nullable();
            $table->timestamp('delivered_at')->nullable();

            $table->index('delivery_number');
            $table->index('order_id');
            $table->index('rider_id');
            $table->index('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_orders');
    }
};
