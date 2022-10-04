<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Madre extends Model
{
    use HasFactory;

    protected $table = 'madre';

    protected $primaryKey = 'id';

    public function datosFamiliares(){
        return $this->belongsTo(DatosFamiliares::class, 'id');
    }
}
