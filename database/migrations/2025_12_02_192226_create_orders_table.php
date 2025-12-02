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
        Schema::create('orders', function (Blueprint $table) {

            $status = [
                'PENDING', 'RECEIVED', 'CONSOLIDATED', 'DISPATCHED',
                'IN_TRANSIT', 'ARRIVED', 'READY_FOR_RELEASE', 'RELEASED', 'DELIVERED'
            ];
            
            $table->id();
            $table->timestamps();

            $table->string('tracking_number', 50)->unique();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('origin_country');
            $table->string('receiver_name');
            $table->string('receiver_phone');
            $table->string('receiver_email')->nullable();
            $table->text('receiver_address');
            $table->enum('status', $status)->default('PENDING');
            $table->timestamp('received_at')->nullable();
            $table->timestamp('dispatched_at')->nullable();
            $table->timestamp('arrived_at')->nullable();
            $table->timestamp('released_at')->nullable();
            $table->timestamp('delivered_at')->nullable();           
            
            $table->index('tracking_number');
            $table->index('user_id');
            $table->index('status');
            $table->index('created_at');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
