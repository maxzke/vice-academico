<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrera extends Model
{
    use HasFactory;
    protected $table = 'carreras';
    protected $fillable = [
        'nombre'
    ];

    public function profesores(){
        return $this->belongsToMany(Profesor::class)->withPivot('fecha');
    }
    public function planes(){
        return $this->belongsToMany(Plan::class)->withPivot('alumnos','aprobados','reprobados','baja');
    }
}
