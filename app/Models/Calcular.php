<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calcular extends Model
{
    use HasFactory;
    protected $table = 'calculars';
    protected $primaryKey = 'id_calculo';

    protected $fillable = [
        'monto_ingreso',
        'monto_deuda',
        'monto_pendiente',
        'monto_total',
    ];
}
