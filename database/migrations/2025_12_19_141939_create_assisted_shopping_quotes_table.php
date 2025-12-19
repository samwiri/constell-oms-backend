<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
     
    public function up(): void
    {
        Schema::create('assisted_shopping_quotes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->softDeletes();

            $table->foreignId('assisted_shopping_id')->constrained('assisted_shoppings')->onDelete('cascade');
            $table->string('item_name');
            $table->integer('quantity');
            $table->double('unit_price');
        });
    }

     
    public function down(): void
    {
        Schema::dropIfExists('assisted_shopping_quotes');
    }
};
