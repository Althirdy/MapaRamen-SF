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
        Schema::create('inventory', function (Blueprint $table) {
            $table->id('InventoryID');
            $table->foreignId('ManagerID')->constrained('branch_manager')->cascadeOnDelete();
            $table->foreignId('IngredientID')->constrained('ingredients')->cascadeOnDelete();
            $table->integer('IngredientQuantity');
            $table->integer('IngredientMaxQuantity');
            $table->integer('IngredientMinQuantity');
            $table->date('RestockDate');
            $table->id('SupplierID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
