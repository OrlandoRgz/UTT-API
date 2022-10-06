<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    protected $table = 'grupo';

    protected $primaryKey = 'id';

    public function carrera(){
        return $this->hasOne(Carrera::class, 'grupo');
    }

    public function especialidad(){
        return $this->hasOne(Especialidad::class, 'grupo');
    }

    public function periodo(){
        return $this->hasOne(Periodo::class, 'grupo');
    }
}
