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
        return $this->hasOne(DatosPersonales::class, 'alumno');
    }

    public function datosFamiliares(){
        return $this->hasOne(DatosFamiliares::class, 'alumno');
    }

    public function datosLaborales(){
        return $this->hasOne(DatosLaborales::class, 'alumno');
    }

    public function datosEconomicos(){
        return $this->hasOne(DatosEconomicos::class, 'alumno');
    }

    public function datosEscolares(){
        return $this->hasOne(DatosEscolares::class, 'alumno');
    }

    public function promedios(){
        return $this->hasOne(Promedios::class, 'alumno');
    }
}

