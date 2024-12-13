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
        Schema::create('ingredients', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->integer('quantity');
            $table->string('measurement');
            $table->string('status');
            $table->date('manufactured');
            $table->date('expiration');
            $table->date('delivered');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredients');
    }
};
