<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IngresosFamiliaresGrupo extends Model
{
    use HasFactory;

    protected $table = 'ingresosfamiliaresgrupo';

    public function datospersonalesgrupo(){
        return $this->belongsTo(DatosPersonalesGrupo::class, 'id');
    }
}
