<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Data User
        $userId = DB::table('user')->insertGetId([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password123'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 2. Data Profile
        DB::table('profile')->insert([
            'umur' => 20,
            'bio' => 'Administrator Utama Website Film',
            'alamat' => 'Jakarta, Indonesia',
            'user_id' => $userId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 3. Data Genre
        $genreActionId = DB::table('genre')->insertGetId([
            'nama' => 'Action',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('genre')->insert([
            ['nama' => 'Comedy', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Drama', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Horror', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // 4. Data Cast
        $castId = DB::table('cast')->insertGetId([
            'nama' => 'Iko Uwais',
            'umur' => 40,
            'bio' => 'Aktor laga profesional Indonesia.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 5. Data Film
        $filmId = DB::table('film')->insertGetId([
            'judul' => 'The Raid',
            'ringkasan' => 'Pasukan khusus menyerbu gedung markas penjahat.',
            'tahun' => 2011,
            'poster' => 'theraid.jpg',
            'genre_id' => $genreActionId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 6. Data Peran
        DB::table('peran')->insert([
            'film_id' => $filmId,
            'cast_id' => $castId,
            'nama' => 'Rama',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // 7. Data Kritik
        DB::table('kritik')->insert([
            'user_id' => $userId,
            'film_id' => $filmId,
            'content' => 'Film aksi terbaik dengan koreografi laga yang sangat baik!',
            'point' => 5,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}