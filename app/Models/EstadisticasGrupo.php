<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadisticasGrupo extends Model
{
    use HasFactory;

    protected $table = 'estadisticasgrupo';

    public function datosPersonalesGrupo(){
        return $this->hasOne(DatosPersonalesGrupo::class, 'estadisticasGrupo');
    }
}
