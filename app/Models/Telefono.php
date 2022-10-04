<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    use HasFactory;

    protected $table = 'telefono';

    protected $primaryKey = 'id';

    protected $fillable = [
        'casa',
        'movil'
    ];

    public function contacto(){
        return $this->belongsTo(Contacto::class, 'id');
    }
}
