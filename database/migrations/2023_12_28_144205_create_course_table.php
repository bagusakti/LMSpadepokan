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
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->string('image')->nullable;
            $table->longText('d1');
            $table->longText('d2');
            $table->longText('p1');
            $table->longText('p2');
            $table->longText('p3');
            $table->longText('dp1');
            $table->longText('dp2');
            $table->longText('dp3');
            $table->text('pendaftaran')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course');
    }
};
