<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosLaborales extends Model
{
    use HasFactory;

    protected $table = 'datosfamiliares';

    protected $primaryKey = 'id';

    public function alumnos(){
        return $this->belongsTo(Alumnos::class, 'id');
    }

    public function empresa(){
        return $this->hasOne(Empresa::class, 'datosLaborales');
    }
}
