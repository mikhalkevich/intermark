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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('body')->nullable();
            $table->integer('country_id')->nullable();
            $table->string('price')->nullable();
            $table->string('type')->nullable();
            $table->string('status')->nullable();
            $table->string('square')->nullable();
            $table->string('location')->nullable();
            $table->integer('rooms')->nullable();
            //$table->enum('type', ['villa',''])->default('villa');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
