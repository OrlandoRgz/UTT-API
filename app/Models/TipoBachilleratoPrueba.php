<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoBachilleratoPrueba extends Model
{
    use HasFactory;

    protected $table = 'ingresosfamiliaresprueba';

    protected $primaryKey = 'id';
}
