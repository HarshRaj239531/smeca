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
        Schema::create('products', function (Blueprint $table): void {
            $table->id();
            $table->foreignId('category_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('tagline')->nullable();
            $table->text('short_description');
            $table->longText('description')->nullable();
            $table->string('volume_size')->nullable();
            $table->string('key_ingredients')->nullable();
            $table->string('benefits')->nullable();
            $table->string('image_url')->nullable();
            $table->string('status')->default('Available');
            $table->boolean('is_ayurvedic')->default(true);
            $table->boolean('is_featured')->default(false);
            $table->boolean('b2b_available')->default(true);
            $table->string('moq')->default('500 Units (OEM)');
            $table->timestamps();
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
