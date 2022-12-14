<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conyuge extends Model
{
    use HasFactory;

    protected $table = 'conyuge';

    protected $primaryKey = 'id';

    public function datosFamiliares(){
        return $this->belongsTo(DatosFamiliares::class, 'id');
    }
}
