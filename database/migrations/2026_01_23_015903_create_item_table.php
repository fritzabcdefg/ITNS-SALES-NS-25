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
        Schema::create('item', function (Blueprint $table) {
            $table->id('item_id');   // primary key
            $table->string('name');  // product name
            $table->string('description'); // product description
            $table->decimal('cost_price', 8, 2); // cost price
            $table->decimal('sell_price', 8, 2); // selling price
            $table->string('img_path')->default('default.jpg'); // image path
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item');
    }
};
