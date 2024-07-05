<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendiente extends Model
{
    use HasFactory;
    protected $table = 'pendientes';
    protected $primaryKey = 'id_pendiente';

    protected $fillable = [
        'pen_monto',
        'pen_fecha',
        'pen_tipo_pendiente',
        'pen_tipo_objetivo',
        'pen_duracion',
        'pen_descripcion',
        'pen_estado',
    ];
}
