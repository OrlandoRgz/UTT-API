<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DatosFamiliares extends Model
{
    use HasFactory;

    protected $table = 'datosfamiliares';

    protected $primaryKey = 'id';

    public function alumnos(){
        return $this->belongsTo(Alumnos::class, 'id');
    }

    public function padre(){
        return $this->hasOne(Padre::class, 'datosFamiliares');
    }

    public function madre(){
        return $this->hasOne(Madre::class, 'datosFamiliares');
    }

    public function conyuge(){
        return $this->hasOne(Conyuge::class, 'datosFamiliares');
    }

    public function emergencia(){
        return $this->hasOne(Emergencia::class, 'datosFamiliares');
    }
}
