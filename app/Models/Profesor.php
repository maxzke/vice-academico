<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    protected $fillable = [
        'campus_id',
        'sni_id',
        'categoria_id',
        'nombre',
        'apellido_p',
        'apellido_m',
        'ingreso',
        'sexo',
    ];

    public function carreras(){
        return $this->belongsToMany(Carrera::class)->withPivot('fecha');                                                     
    }
    // public function carrera(){
    //     return $this->belongsTo(Carrera::class);
    // }
    public function grados(){
        return $this->belongsToMany(Grado::class);
    }
    public function campus(){
        return $this->belongsTo(Campus::class);
    }
    public function categoria(){
        return $this->belongsTo(Categoria::class);
    }
    public function sni(){
        return $this->belongsTo(Sni::class);
    }
}
