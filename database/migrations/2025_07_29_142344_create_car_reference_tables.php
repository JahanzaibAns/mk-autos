<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('colors', function (Blueprint $table) {
            $table->id();
            $table->string('color', 191);
            $table->string('value', 191);
            $table->timestamps();
        });

        Schema::create('specs', function (Blueprint $table) {
            $table->id();
            $table->string('spec', 191);
            $table->timestamps();
        });

        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('feature', 191);
            $table->timestamps();
        });

        Schema::create('doors', function (Blueprint $table) {
            $table->id();
            $table->integer('door');
            $table->timestamps();
        });

        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->integer('seat');
            $table->timestamps();
        });

        Schema::create('bags', function (Blueprint $table) {
            $table->id();
            $table->integer('bag');
            $table->timestamps();
        });

        Schema::create('transmissions', function (Blueprint $table) {
            $table->id();
            $table->string('transmission', 191);
            $table->timestamps();
        });

        Schema::create('fuel_types', function (Blueprint $table) {
            $table->id();
            $table->string('fuel_type', 191);
            $table->timestamps();
        });

        Schema::create('body_types', function (Blueprint $table) {
            $table->id();
            $table->string('body_type', 191);
            $table->string('slug', 191)->unique(); // FIX: safe length
            $table->timestamps();
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category', 191);
            $table->string('slug', 191)->unique(); // FIX: safe length
            $table->timestamps();
        });

        Schema::create('make_years', function (Blueprint $table) {
            $table->id();
            $table->year('year');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('make_years');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('body_types');
        Schema::dropIfExists('fuel_types');
        Schema::dropIfExists('transmissions');
        Schema::dropIfExists('bags');
        Schema::dropIfExists('seats');
        Schema::dropIfExists('doors');
        Schema::dropIfExists('features');
        Schema::dropIfExists('specs');
        Schema::dropIfExists('colors');
    }
};
