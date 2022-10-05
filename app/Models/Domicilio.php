<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    use HasFactory;

    protected $table = 'domicilio';

    protected $primaryKey = 'id';

    protected $fillable = [
        'calle',
        'numero',
        'colonia'
    ];

    public function datosPersonales(){
        return $this->belongsTo(DatosPersonales::class, 'id');
    }

    public function municipio(){
        return $this->hasOne(Municipio::class, 'domicilio');
    }
}
