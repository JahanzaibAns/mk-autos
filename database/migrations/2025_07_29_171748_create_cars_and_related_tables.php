<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
   
    public function up(): void
    {

        // Cars
       Schema::create('cars', function (Blueprint $table) {
            $table->id();
            // Foreign keys
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreignId('spec_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('door_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('seat_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('bag_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('transmission_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('fuel_type_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('body_type_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('category_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('make_year_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('model_id')->nullable()->constrained()->nullOnDelete();
            // Other columns
            $table->string('slug')->nullable();
            $table->longText('description')->nullable();
            $table->string('feature_image')->nullable();
            $table->string('car_location')->nullable();
            $table->integer('min_days_booking')->nullable();
            $table->string('delivery_charges', 200)->nullable();
            $table->string('delivery_days')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->dateTime('end_date')->nullable();
            $table->string('security_deposit')->nullable();
            $table->string('car_engine_size')->nullable();
            $table->string('insurance')->nullable();
            $table->string('car_condition')->nullable();
            $table->string('horse_power')->nullable();
            $table->string('mileage')->nullable();
            $table->string('interior_color')->nullable();
            $table->string('exterior_color')->nullable();
            $table->boolean('is_featured')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });


        // Car Prices table
        Schema::create('car_prices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade');
            $table->enum('type', ['daily', 'weekly', 'monthly']);
            $table->decimal('price', 10, 2);
            $table->decimal('discounted_price', 10, 2)->nullable();
            $table->integer('kilometers')->nullable();
            $table->timestamps();
        });

        // Car Images table
        Schema::create('car_images', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade');
            $table->string('image');
            $table->timestamps();
        });

        Schema::create('car_features', function (Blueprint $table) {
            $table->id();
            $table->foreignId('car_id')->constrained('cars')->onDelete('cascade');
            $table->foreignId('feature_id')->constrained('features')->onDelete('cascade');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('car_features');
        Schema::dropIfExists('car_images');
        Schema::dropIfExists('car_prices');
        Schema::dropIfExists('cars');
    }
};
