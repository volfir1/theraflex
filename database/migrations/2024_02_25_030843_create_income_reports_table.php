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
        Schema::create('income_reports', function (Blueprint $table) {
            $table->id();
            $table->decimal('income', 10, 2);
            $table->decimal('expenses', 10, 2);
            $table->decimal('netIncome', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('income_reports');
    }
};
