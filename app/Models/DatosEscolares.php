<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosEscolares extends Model
{
    use HasFactory;

    protected $table = 'datosescolares';

    protected $primaryKey = 'id';

    public function alumnos(){
        return $this->belongsTo(Alumnos::class, 'id');
    }

    public function tipoBachillerato(){
        return $this->hasOne(TipoBachillerato::class, 'datosEscolares');
    }

    public function entidadFederativa(){
        return $this->hasOne(EntidadFederativa::class, 'datosEscolares');
    }
}
