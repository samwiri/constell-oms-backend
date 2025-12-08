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
        Schema::create('manifests', function (Blueprint $table) {
            
            $table->id();
            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('batch_id')->constrained('consolidation_batches')->onDelete('cascade');
            $table->string('manifest_number', 50)->unique();
            $table->string('file_path');
            $table->foreignId('generated_by')->constrained('user');         

            $table->index('manifest_number');
            $table->index('batch_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manifests');
    }
};
