<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deuda extends Model
{
    use HasFactory;
    protected $table = 'deudas';
    protected $primaryKey = 'id_deuda';

    protected $fillable = [
        'deu_monto_deuda',
        'deu_monto_fijo',
        'deu_fecha_pagar',
        'deu_tipo_deuda',
        'deu_tipo_deudor',
        'deu_nombres',
        'deu_apellidos',
        'deu_correo',
        'deu_numero',
        'deu_descripcion',
        'deu_estado',
    ];

    public function pagos()
    {
        return $this->hasMany(Pago::class, 'id_deuda', 'id_deuda');
    }
}
