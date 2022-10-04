<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LugarDeNacimiento extends Model
{
    use HasFactory;

    protected $table = 'lugardenacimiento';

    protected $primaryKey = 'id';

    protected $fillable = [
        'ciudad',
    ];

    public function datosPersonales(){
        return $this->belongsTo(DatosPersonales::class, 'id');
    }

    public function entidadFederativa(){
        return $this->hasOne(EntidadFederativa::class, 'lugarNacimiento_id');
    }
}
