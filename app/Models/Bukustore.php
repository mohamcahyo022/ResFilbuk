<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bukustore extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'cover',
        'genre',
        'rilis',
        'deskripsi',
        'ebook',
        'link_1',
        'link_2',
        'link_sope',
        'link_tokped',
    ];
}
