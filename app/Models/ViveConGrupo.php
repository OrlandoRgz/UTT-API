<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViveConGrupo extends Model
{
    use HasFactory;

    protected $table = 'vivecongrupo';


    public function datospersonalesgrupo(){
        return $this->belongsTo(DatosPersonalesGrupo::class, 'id');
    }
}
