<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    protected $fillable = [
        'dokumentasi',
        'judul',
        'deskripsi',
        'kategori',
    ];

    protected function casts(): array
    {
        return [
            'dokumentasi' => 'array',
        ];
    }
}
