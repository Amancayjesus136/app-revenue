<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventos extends Model
{
    use HasFactory;
    protected $table = 'eventos';
    protected $primaryKey = 'id_evento';

    protected $fillable = [
        'evento',
        'objeto_evento',
        'fecha_evento',
        'descripcion_evento',
    ];
}
