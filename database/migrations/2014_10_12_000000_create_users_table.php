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
        Schema::create('users', function (Blueprint $table) {
            $table->unsignedInteger('id')->autoIncrement(); // Ubah jadi int dan auto increment
            $table->string('name', 40); // Nama dengan panjang maksimal 25 karakter
            $table->string('code', 8); // Kode dengan panjang maksimal 8 karakter
            $table->string('email', 35)->unique()->nullable(); // Email dengan panjang maksimal 35 karakter
            $table->timestamp('email_verified_at')->nullable(); // Email verified
            $table->string('password', 60); // Tingkatkan panjang kolom menjadi 60
            $table->boolean('isAdmin'); // Indikator admin menggunakan boolean
            $table->rememberToken(); // Token untuk remember me
            $table->timestamps(); // created_at dan updated_at
        });
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
