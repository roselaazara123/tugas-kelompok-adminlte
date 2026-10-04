<?php
// database/migrations/xxxx_xx_xx_xxxxxx_add_poster_to_films_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('films', function (Blueprint $table) {
            $table->string('poster')->nullable();
        });
    }

    public function down()
    {
        Schema::table('films', function (Blueprint $table) {
            $table->dropColumn('poster');
        });
    }
};  