<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingresos extends Model
{
    use HasFactory;
    protected $table = 'ingresos';
    protected $primaryKey = 'id_ingreso';

    protected $fillable = [
        'ing_monto',
        'ing_fecha',
        'ing_tipo_ingreso',
        'ing_tipo_donante',
        'ing_nombres',
        'ing_apellidos',
        'ing_correo',
        'ing_numero',
        'ing_descripcion',
        'ing_estado',
    ];
}
