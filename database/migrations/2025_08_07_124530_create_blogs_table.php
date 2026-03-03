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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('heading');
            $table->string('slug', 191)->unique(); // limit to 191 chars for safe indexing
            $table->string('meta_title', 191)->nullable();
            $table->text('meta_description')->nullable();
            $table->string('image')->nullable(); // store image path
            $table->longText('description')->nullable(); // full blog content
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
