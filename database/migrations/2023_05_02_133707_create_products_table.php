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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_title',100);
            $table->text('product_description');
            $table->string('product_keywords');
            $table->Integer('categories_id')->nullable();
            $table->Integer('brand_id')->nullable();
            // $table->unsignedBigInteger('brand_id');

            $table->string('product_image1');
            $table->string('product_image2');
            $table->string('product_image3');

            $table->string('product_price',100);
            $table->timestamps('');
            $table->string('status')->default('active');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
