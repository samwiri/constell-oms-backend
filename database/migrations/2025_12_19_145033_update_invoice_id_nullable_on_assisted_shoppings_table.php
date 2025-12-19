<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('payments', function (Blueprint $table) {
          
            $table->dropForeign(['invoice_id']);

       
            $table->foreignId('invoice_id')
                  ->nullable()
                  ->change();

      
            $table->foreign('invoice_id')
                  ->references('id')
                  ->on('invoices')
                  ->nullOnDelete();
        });
    }

    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->dropForeign(['invoice_id']);

            $table->foreignId('invoice_id')
                  ->nullable(false)
                  ->change();

            $table->foreign('invoice_id')
                  ->references('id')
                  ->on('invoices')
                  ->cascadeOnDelete();
        });
    }
};

