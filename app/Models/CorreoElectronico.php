<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CorreoElectronico extends Model
{
    use HasFactory;

    protected $table = 'correoelectronico';

    protected $primaryKey = 'id';

    protected $fillable = [
        'personal',
        'institucional'
    ];

    public function contacto(){
        return $this->belongsTo(Contacto::class, 'id');
    }
}
