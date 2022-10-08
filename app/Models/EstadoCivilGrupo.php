<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoCivilGrupo extends Model
{
    use HasFactory;

    protected $table = 'estadocivilgrupo';

    public function datosPersonalesGrupo(){
        return $this->belongsTo(DatosPersonalesGrupo::class, 'id');
    }
}
