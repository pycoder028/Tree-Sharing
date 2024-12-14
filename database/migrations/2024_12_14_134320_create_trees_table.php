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
        Schema::create('trees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('width')->nullable();
            $table->float('height')->nullable();
            $table->string('location');
            $table->string('scientific_name')->nullable();
            $table->text('description');
            $table->unsignedInteger('user_id');
            $table->double('price')->default(0);
            $table->boolean('is_approved')->default(0);
            $table->boolean('is_ecommerce')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trees');
    }
};
