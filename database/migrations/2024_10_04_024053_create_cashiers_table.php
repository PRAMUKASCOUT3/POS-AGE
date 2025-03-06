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
        Schema::create('cashiers', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement(); // Ubah jadi int dan auto increment
            $table->string('code',15);
            $table->unsignedInteger('user_id'); // Cocokkan dengan tipe categories.id
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->unsignedInteger('product_id'); // Cocokkan dengan tipe categories.id
            $table->foreign('product_id')->references('id')->on('products')->cascadeOnDelete();            
            $table->date('date');
            $table->string('total_item',15);
            $table->decimal('subtotal', 10, 2);
            $table->decimal('amount_paid', 15, 2); 
            $table->string('status',10); // Status transaksi
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashiers');
    }
};
