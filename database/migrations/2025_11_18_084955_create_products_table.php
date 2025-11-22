<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('model');
            $table->string('brand');
            $table->decimal('price', 10, 2);

            $table->string('description')->nullable();
            $table->string('image')->nullable();

            $table->string('mileage')->nullable();
            $table->string('fuel_type')->nullable();
            $table->integer('year')->nullable();
            $table->string('owner_type')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
