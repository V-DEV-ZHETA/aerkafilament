<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'foto',
        'judul',
        'deskripsi',
        'url',
        'tanggal',
    ];

    protected $casts = [
        'tanggal' => 'date',
    ];
}
