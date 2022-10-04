<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Padre extends Model
{
    use HasFactory;

    protected $table = 'padre';

    protected $primaryKey = 'id';

    public function datosFamiliares(){
        return $this->belongsTo(DatosFamiliares::class, 'id');
    }
}
