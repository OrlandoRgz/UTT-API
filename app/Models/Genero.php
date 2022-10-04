<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    use HasFactory;

    protected $table = 'genero';

    protected $primaryKey = 'id';

    protected $fillable = [
        'idGenero',
        'descripcion'
    ];

    public function datosPersonales(){
        return $this->belongsTo(DatosPersonales::class, 'id');
    }
}
