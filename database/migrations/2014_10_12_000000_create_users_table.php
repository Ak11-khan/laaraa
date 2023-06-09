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
            $table->string('username', 100)->unique();

            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('product_title',100);
            $table->string('password');
            $table->string('user_image');
            $table->string('user_address');
            $table->string('user_mobile',20);

            // $table->rememberToken();
            $table->timestamps();
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
