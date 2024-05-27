<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'penulis',
        'poster',
        'trailer',
        'genre',
        'sutradara',
        'durasi',
        'rilis',
        'aktor',
        'orientasi',
        'sinopsis',
        'analisis',
        'evaluasi'
    ];
}
