<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    protected $table = 'pagos';
    protected $primaryKey = 'id_pago';

    protected $fillable = [
        'id_deuda',
        'monto_pago',
    ];

    public function deuda()
    {
        return $this->belongsTo(Deuda::class, 'id_deuda', 'id_deuda');
    }
}
