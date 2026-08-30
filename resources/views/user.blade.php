<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id(); // int AUTO_INCREMENT PRIMARY KEY
            $table->string('name', 45);
            $table->string('email', 45)->unique();
            $table->string('password', 255); // Diatur 255 agar muat hash password Laravel
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user');
    }
};