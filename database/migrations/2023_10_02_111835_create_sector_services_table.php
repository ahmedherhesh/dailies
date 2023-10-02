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
        Schema::create('sector_services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('daily_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('sector_id');
            $table->unsignedBigInteger('period_id');
            $table->string('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sector_services');
    }
};
