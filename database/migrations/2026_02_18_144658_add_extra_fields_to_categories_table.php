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
        Schema::table('categories', function (Blueprint $table) {
            $table->text('description')->nullable()->after('category');
            $table->string('image')->nullable()->after('description');
            $table->string('meta_title')->nullable()->after('image');
            $table->string('meta_description', 500)->nullable()->after('meta_title');
            $table->boolean('status')->default(1)->after('slug');
        });
    }
    
    public function down()
    {
        Schema::table('categories', function (Blueprint $table) {
            $table->dropColumn([
                'description',
                'image',
                'meta_title',
                'meta_description',
                'status',
            ]);
        });
    }
};
