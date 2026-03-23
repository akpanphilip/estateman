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
        Schema::create('prototypes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('estate_id')->constrained()->cascadeOnDelete();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('description')->nullable();
            $table->decimal('price', 15, 2)->nullable();

            // Plot info
            $table->string('plot_size')->nullable();

            // Category
            $table->enum('category', ['regular', 'featured', 'new_listing'])->default('regular');

            // Social & contact
            $table->string('facebook_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('phone_number')->nullable();

            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prototypes');
    }
};
