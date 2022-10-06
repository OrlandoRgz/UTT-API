<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promedios extends Model
{
    use HasFactory;

    protected $table = 'promedios';

    protected $primaryKey = 'id';

    public function alumnos(){
        return $this->belongsTo(Alumnos::class, 'id');
    }

    public function tsu(){
        return $this->hasOne(Tsu::class, 'promedios_id');
    }

    public function ingeneria(){
        return $this->hasOne(Ingeneria::class, 'promedios_id');
    }
}
