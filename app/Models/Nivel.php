<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    use HasFactory;

    protected $table = 'nivel';

    protected $primaryKey = 'id';

    public function carrera(){
        return $this->belongsTo(Carrera::class, 'id');
    }
}
