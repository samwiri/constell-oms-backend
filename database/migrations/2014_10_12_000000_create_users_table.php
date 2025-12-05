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
        Schema::create('users', function (Blueprint $table) {

            $table->id();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('tin')->nullable()->comment('Tax Identification Number');
            $table->string('passport')->nullable();
            $table->text('address')->nullable();
            $table->string('otp')->nullable();
            $table->enum('status', ['active', 'suspended'])->default('active');
            $table->enum('user_type', ['user', 'staff','super_user'])->default('user');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();
            
            $table->index('email');
            $table->index('phone');
            $table->index('status');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
