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
        Schema::table('cargo_declations', function (Blueprint $table) {
            $table->boolean('insured')->default(0);
        });

        Schema::table('assisted_shoppings', function (Blueprint $table) {
            $table->boolean('insured')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cargo_declations', function (Blueprint $table) {
           $table->dropColumn('insured');
        });

        Schema::table('assisted_shoppings', function (Blueprint $table) {
            $table->dropColumn('insured');
        });
    }
};
