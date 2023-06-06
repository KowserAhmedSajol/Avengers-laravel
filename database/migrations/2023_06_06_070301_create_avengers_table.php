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
        Schema::create('avengers', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('knownAs',50);
            $table->string('ability',50);
            $table->string('uses',50);
            $table->string('villain',50);
            $table->string('gender',50);
            $table->string('image',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('avengers');
    }
};