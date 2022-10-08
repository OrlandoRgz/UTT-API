<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosLaboralesGrupo extends Model
{
    use HasFactory;

    protected $table = 'datoslaboralesgrupo';

    public function estadisticasgrupo(){
        return $this->belongsTo(EstadisticasGrupo::class, 'id');
    }

    public function trabajanGrupo(){
        return $this->hasMany(TrabajanGrupo::class, 'datosLaboralesGrupo');
    }

    public function trabajoRelacionadoEstudioGrupo(){
        return $this->hasMany(TrabajoRelacionadoEstudioGrupo::class, 'datosLaboralesGrupo');
    }
}
