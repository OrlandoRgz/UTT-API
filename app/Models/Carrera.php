<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;

    protected $table = 'carrera';

    protected $primaryKey = 'id';

    public function grupo(){
        return $this->belongsTo(Grupo::class, 'id');
    }

    public function nivel(){
        return $this->hasOne(Nivel::class, 'carrera');
    }
}
