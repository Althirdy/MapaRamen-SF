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
            $table->id("orderID");
            $table->unsignedBigInteger('CashierID');
            $table->foreign('CashierID')->references('CashierID')->on('cashiers')->onDelete('cascade');
            $table->date('OrderDate'); 
            $table->unsignedBigInteger('customerID');
            $table->foreign('customerID')->references('customerID')->on('customers')->onDelete('cascade');
            $table->float('TotalAmount')->nullable()->default(0.00);
            $table->bigInteger('ReferenceNumber')->unique()->default(12);
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
