<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cashiers', function (Blueprint $table) {
            $table->unsignedInteger('id_cashier')->autoIncrement();
            $table->string('code',15);
            $table->unsignedInteger('id_user')->nullable(); // Pastikan menggunakan unsignedInteger
            $table->foreign('id_user')
                ->references('id_user')
                ->on('users')
                ->cascadeOnDelete();
            $table->unsignedInteger('id_product')->nullable(); // Pastikan menggunakan unsignedInteger
            $table->foreign('id_product')
                ->references('id_product')
                ->on('products')
                ->cascadeOnDelete();
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
