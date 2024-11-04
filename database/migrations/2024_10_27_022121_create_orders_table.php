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
        Schema::create('orders', function (Blueprint $table) {
            $table->id("order_id");
            $table->foreignId('cashier_id')->constrained('cashiers')->cascadeOnDelete();
            $table->date('order_date'); 
            $table->integer('payment_mode');
            $table->float('TotalAmount')->default(0.00);
            $table->bigInteger('ReferenceNumber')->nullable()->unique()->default(12);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
