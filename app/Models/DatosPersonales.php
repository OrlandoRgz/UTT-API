<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosPersonales extends Model
{
    use HasFactory;
    
    protected $table = 'datospersonales';

    protected $primaryKey = 'id';

    protected $fillable = [
        'fechaNacimiento',
        'edad',
    ];

    public function alumnos(){
        return $this->belongsTo(Alumnos::class, 'id');
    }

    public function lugarDeNacimiento(){
        return $this->hasOne(LugarDeNacimiento::class, 'datosPersonales');
    }

    public function genero(){
        return $this->hasOne(Genero::class, 'datosPersonales');
    }

    public function estadoCivil(){
        return $this->hasOne(EstadoCivil::class, 'datosPersonales');
    }

    public function domicilio(){
        return $this->hasOne(Domicilio::class, 'datosPersonales');
    }

    public function contacto(){
        return $this->hasOne(Contacto::class, 'datosPersonales');
    }
}
