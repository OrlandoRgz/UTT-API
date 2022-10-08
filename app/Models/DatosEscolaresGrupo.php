<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosEscolaresGrupo extends Model
{
    use HasFactory;

    protected $table = 'datosescolaresgrupo';

    public function estadisticasgrupo(){
        return $this->belongsTo(EstadisticasGrupo::class, 'id');
    }

    public function tipoBachilleraroGrupo(){
        return $this->hasOne(TipoBachilleraroGrupo::class, 'datosEscolaresGrupo');
    }
}
