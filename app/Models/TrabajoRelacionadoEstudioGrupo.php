<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrabajoRelacionadoEstudioGrupo extends Model
{
    use HasFactory;

    protected $table = 'trabajorelacionadoestudiosgrupo';

    public function datosLaboralesGrupo(){
        return $this->belongsTo(DatosLaboralesGrupo::class, 'id');
    }
}
