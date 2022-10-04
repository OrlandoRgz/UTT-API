<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EntidadFederativa extends Model
{
    use HasFactory;

    protected $table = 'entidadfederativa';

    protected $primaryKey = 'id';

    protected $fillable = [
        'idEntidadFederativa',
        'nombre',
    ];

    public function lugarDeNacimiento(){
        return $this->belongsTo(LugarDeNacimiento::class, 'id');
    }

}
