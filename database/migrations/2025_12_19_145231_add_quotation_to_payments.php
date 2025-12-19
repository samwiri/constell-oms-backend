<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up(): void
    {
        Schema::table('payments', function (Blueprint $table) {
            $table->foreignId('assisted_shopping_id')->nullable()->constrained('assisted_shoppings')->onDelete('cascade');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');

        });
    }

     
    public function down(): void
    {
        Schema::table('payments', function (Blueprint $table) {

            $table->dropForeign(['assisted_shopping_id']);
            $table->dropColumn('assisted_shopping_id');
            $table->dropColumn('user_id');
        });
    }
};
