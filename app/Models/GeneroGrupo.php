<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneroGrupo extends Model
{
    use HasFactory;

    protected $table = 'generogrupo';

    public function datospersonalesgrupo(){
        return $this->belongsTo(DatosPersonalesGrupo::class, 'id');
    }
}
