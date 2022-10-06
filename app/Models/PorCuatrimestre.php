<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PorCuatrimestre extends Model
{
    use HasFactory;

    protected $table = 'porcuatrimestre';

    protected $primaryKey = 'id';

    public function tsu(){
        return $this->belongsTo(Tsu::class, 'id');
    }

    public function ingeneria(){
        return $this->belongsTo(Ingeneria::class, 'id');
    }
}
