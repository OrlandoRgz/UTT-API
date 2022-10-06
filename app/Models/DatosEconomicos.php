<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosEconomicos extends Model
{
    use HasFactory;

    protected $table = 'datosEconomicos';

    protected $primaryKey = 'id';

    public function alumnos(){
        return $this->belongsTo(Alumnos::class, 'id');
    }

    public function vivecon(){
        return $this->hasOne(ViveCon::class, 'datosEconomicos');
    }

    public function vivienda(){
        return $this->hasOne(Vivienda::class, 'datosEconomicos');
    }

    public function transporte(){
        return $this->hasOne(Transporte::class, 'datosEconomicos');
    }

    public function apoyoEconomico(){
        return $this->hasOne(ApoyoEconomico::class, 'datosEconomicos');
    }

    public function ingresosFamiliares(){
        return $this->hasOne(IngresosFamiliares::class, 'datosEconomicos');
    }
}
