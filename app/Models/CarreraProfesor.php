<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraProfesor extends Model
{
    use HasFactory;
    protected $table = 'carrera_profesor';
    protected $fillable = [
        'profesor_id',
        'carrera_id',
        'fecha'
    ];
}
