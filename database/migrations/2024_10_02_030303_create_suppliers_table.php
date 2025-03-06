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
        Schema::create('suppliers', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement(); // Ubah jadi int dan auto increment
            $table->string('name', 30); // Name with a max length of 25
            $table->string('contact_person', 15); // Contact_person with a max length of 15
            $table->string('address', 150); // Address with a max length of 100
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
