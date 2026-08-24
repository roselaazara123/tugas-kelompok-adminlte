<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    // Nama tabel di database
    protected $table = 'film';

    // Kolom yang boleh diisi (Mass Assignment)
    protected $fillable = [
        'judul',
        'ringkasan',
        'tahun',
        'poster',
        'genre_id'
    ];

    // Relasi: Film dimiliki oleh 1 Genre
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id');
    }

    // Relasi: 1 Film punya banyak Peran
    public function peran()
    {
        return $this->hasMany(Peran::class, 'film_id');
    }

    // Relasi: 1 Film punya banyak Kritik
    public function kritik()
    {
        return $this->hasMany(Kritik::class, 'film_id');
    }
}