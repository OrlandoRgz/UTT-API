<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoBachillerato extends Model
{
    use HasFactory;

    protected $table = 'tipobachillerato';

    protected $primaryKey = 'id';

    public function datosEscolares(){
        return $this->belongsTo(DatosEscolares::class, 'id');
    }
}
