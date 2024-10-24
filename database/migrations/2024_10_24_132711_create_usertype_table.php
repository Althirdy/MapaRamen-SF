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
        Schema::create('branch_manager', function (Blueprint $table) {
            $table->id('manager_id');
            $table->string('manager_name');
            $table->timestamps();
        });

        Schema::create('cashiers', function (Blueprint $table) {
            $table->id('cashier_id');
            $table->string('cashier_name');
            $table->foreignId('manager_id')->constrained('branch_manager')->cascadeOnDelete();
            $table->string('password');
            $table->timestamps();
        });

        Schema::create('crew', function (Blueprint $table) {
            $table->id('crew_id');
            $table->string('crew_name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_manager');
        Schema::dropIfExists('cashiers');
        Schema::dropIfExists('crew');
    }
};
