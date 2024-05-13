<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;    
    protected $table = 'planes';
    protected $fillable = [
        'ciclo_id',
        'semestre'
    ];
    
    public function carreras(){
        return $this->belongsToMany(Carrera::class)->withPivot('alumnos','aprobados','reprobados','baja');
    }

    public function ciclo(){
        return $this->belongsTo(Ciclo::class);
    }

    public function materias(){
        return $this->belongsToMany(Materia::class);
    }
}
