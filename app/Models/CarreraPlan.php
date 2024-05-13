<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarreraPlan extends Model
{
    use HasFactory;  
    protected $table = 'carrera_plan';
    protected $fillable = [
        'carrera_id',
        'plan_id',
        'alumnos',
        'aprobados',
        'reprobados',
        'baja',
    ];
}
