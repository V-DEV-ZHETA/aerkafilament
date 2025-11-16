<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    protected $fillable = [
        'foto',
        'nama',
        'posisi',
        'region',
        'jeniskendaraan',
        'merkkendaraan',
        'itasha',
        'foto_kendaraan',
        'sosmed',
        'status',
    ] ;

    protected function casts(): array
    {
        return [
            'sosmed' => 'array',
            'foto_kendaraan' => 'array',
        ];
    }
}