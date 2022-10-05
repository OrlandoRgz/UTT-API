<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contacto';

    protected $primaryKey = 'id';

    public function datosPersonales(){
        return $this->belongsTo(DatosPersonales::class, 'id');
    }

    public function correoElectronico(){
        return $this->hasOne(CorreoElectronico::class, 'contacto');
    }

    public function telefono(){
        return $this->hasOne(Telefono::class, 'contacto');
    }

}
