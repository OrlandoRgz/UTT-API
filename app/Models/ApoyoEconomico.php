<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApoyoEconomico extends Model
{
    use HasFactory;

    protected $table = 'apoyoEconomico';

    protected $primaryKey = 'id';

    public function datosEconomicos(){
        return $this->belongsTo(DatosEconomicos::class, 'id');
    }
}
