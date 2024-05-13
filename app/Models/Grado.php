<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;
    protected $table = 'grados';
    protected $fillable = [
        'nombre'
    ];

    
    public function profesores(){
        return $this->belongsToMany(Profesor::class)->withPivot('fecha');
    }
}
