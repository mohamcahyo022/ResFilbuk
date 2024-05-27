<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Filmstore extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'poster',
        'genre',
        'rilis',
        'deskripsi',
        'link_1',
        'link_2',
        'link_3',
    ];
}
