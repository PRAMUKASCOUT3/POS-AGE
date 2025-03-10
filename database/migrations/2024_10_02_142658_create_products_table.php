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
        Schema::create('products', function (Blueprint $table) {
            $table->unsignedInteger('id_product')->autoIncrement(); // Ubah jadi int dan auto increment
            $table->unsignedInteger('id_category')->nullable(); // Foreign key ke categories
            $table->foreign('id_category')
                ->references('id_category') // Relasi ke id_category di tabel categories
                ->on('categories')
                ->cascadeOnDelete();
            $table->string('code', 8)->unique();
            $table->string('name', 40);
            $table->string('brand', 30);
            $table->string('stock', 5);
            $table->string('price_buy', 15);
            $table->string('price_sell', 15);
            $table->string('unit', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
