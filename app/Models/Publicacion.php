<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Publicacion extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'texto',
        'fecha',
        'id_usuario',
        'id_imagen',
        'id_video',
        'id_clasificacion'
    ];

    protected $hidden = [];

    protected function casts(): array
    {
        return [];
    }

    protected $guarder;
}
