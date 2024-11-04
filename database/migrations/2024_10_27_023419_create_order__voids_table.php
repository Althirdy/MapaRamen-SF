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
        Schema::create('order_void', function (Blueprint $table) {
            $table->id('void_id');
            $table->foreignId('cashier_id')->constrained('cashiers')->cascadeOnDelete();
            $table->date('void_date'); 
            $table->integer('payment_mode');
            $table->float('TotalAmount')->default(0.00);
            $table->timestamps('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('void');
    }
};
