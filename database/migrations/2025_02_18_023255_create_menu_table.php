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
        Schema::create('menu', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('menu_name')->unique();
            $table->string('menu_description')->nullable();
            $table->decimal('price', 4, 2);
            $table->string('menu_image')->nullable();
            $table->boolean('is_available')->default(true);
            $table->boolean('best_coffee')->default(true);
            $table->foreignId('menu_category_id')->constrained('menu_categories');
            $table->integer('total_sold')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu');
    }
};
