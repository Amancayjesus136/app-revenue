<?php

namespace App\Models\mongodb;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use MongoDB\Laravel\Eloquent\Model;

class Ingresos extends Model
{
    use HasFactory;
    protected $connection = 'mongodb';
    protected $collection = 'ingresos';
}
