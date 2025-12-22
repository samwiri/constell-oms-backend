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
        Schema::create('packages', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->softDeletes();
            
            $table->foreignId('order_id')->constrained('orders')->onDelete('cascade');
            $table->string('hwb_number', 50)->unique()->comment('House Waybill Number');

            $table->text('contents');
            $table->decimal('declared_value', 10, 2);
            $table->decimal('weight', 8, 2)->comment('Weight in kg');
            $table->decimal('length', 8, 2)->comment('Length in cm');

            $table->decimal('width', 8, 2)->comment('Width in cm');
            $table->decimal('height', 8, 2)->comment('Height in cm');
            $table->boolean('is_fragile')->default(false);
            $table->boolean('is_hazardous')->default(false);
            $table->boolean('is_damaged')->default(false);

            $table->json('package_photos')->nullable();
            $table->foreignId('warehouse_rack_id')->nullable()->constrained('warehouse_racks')->nullOnDelete();
            $table->timestamp('received_at')->nullable();          
            
            $table->index('hwb_number');
            $table->index('order_id');
            $table->index('warehouse_rack_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
