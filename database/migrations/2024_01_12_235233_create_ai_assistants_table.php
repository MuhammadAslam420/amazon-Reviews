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
        Schema::create('ai_assistants', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id')->constrained('categories');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('logo')->default('artificial-intelligence.png');
            $table->string('title')->nullable();
            $table->text('prompt')->nullable();
            $table->enum('status',['active','inactive'])->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ai_assistants');
    }
};
