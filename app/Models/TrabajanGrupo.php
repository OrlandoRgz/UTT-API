<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrabajanGrupo extends Model
{
    use HasFactory;

    protected $table = 'trabajangrupo';

    public function datosLaboralesGrupo(){
        return $this->belongsTo(DatosLaboralesGrupo::class, 'id');
    }
}
