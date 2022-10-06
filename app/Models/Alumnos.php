<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumnos extends Model
{
    use HasFactory;

    protected $table = 'alumnos';

    protected $primaryKey = 'id';

    public function datosPersonales(){
        return $this->hasOne(DatosPersonales::class, 'alumnos');
    }

    public function datosFamiliares(){
        return $this->hasOne(DatosFamiliares::class, 'alumnos');
    }

    public function datosLaborales(){
        return $this->hasOne(DatosLaborales::class, 'alumnos');
    }

    public function datosEconomicos(){
        return $this->hasOne(DatosEconomicos::class, 'alumnos');
    }

    public function datosEscolares(){
        return $this->hasOne(DatosEscolares::class, 'alumnos');
    }

    public function promedios(){
        return $this->hasOne(Promedios::class, 'alumnos');
    }
}

