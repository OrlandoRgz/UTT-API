<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosPersonalesGrupo extends Model
{
    use HasFactory;

    protected $table = 'datospersonalesgrupo';

    public function estadisticasgrupo(){
        return $this->belongsTo(EstadisticasGrupo::class, 'id');
    }

    public function generoGrupo(){
        return $this->hasMany(GeneroGrupo::class, 'datosPersonalesGrupo');
    }

    public function estadoCivilGrupo(){
        return $this->hasMany(EstadoCivilGrupo::class, 'datosPersonalesGrupo');
    }

    public function viveConGrupo(){
        return $this->hasMany(ViveConGrupo::class, 'datosPersonalesGrupo');
    }

    public function ingresoFamiliaresConGrupo(){
        return $this->hasMany(IngresosFamiliaresGrupo::class, 'datosPersonalesGrupo');
    }
}
