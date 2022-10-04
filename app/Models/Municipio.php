<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = 'municipio';

    protected $primaryKey = 'id';

    protected $fillable = [
        'idMunicipio',
        'descripcion'
    ];

    public function domicilio(){
        return $this->belongsTo(Domicilio::class, 'id');
    }
}

