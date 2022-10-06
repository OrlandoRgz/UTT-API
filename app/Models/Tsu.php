<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tsu extends Model
{
    use HasFactory;

    protected $table = 'tsu';

    protected $primaryKey = 'id';

    public function promedios(){
        return $this->belongsTo(Promedios::class, 'id');
    }

    public function porcuatrimestre(){
        return $this->hasOne(PorCuatrimestre::class, 'tsu');
    }
}
