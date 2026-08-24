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
        Schema::create('peran', function (Blueprint $table) {
            $table->id(); // id INT (Primary Key, Auto Increment)
            $table->foreignId('film_id')->constrained('film')->onDelete('cascade'); // film_id INT (Foreign Key ke tabel film)
            $table->foreignId('cast_id')->constrained('cast')->onDelete('cascade'); // cast_id INT (Foreign Key ke tabel cast)
            $table->string('nama', 50); // nama VARCHAR(45)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peran');
    }
};