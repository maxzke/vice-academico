<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciclo extends Model
{
    use HasFactory;    
    protected $table = 'ciclos';
    protected $fillable = [
        'nombre',
    ];

    public function planes_de_estudios(){
        return $this->hasMany(Plan::class);
    }
}
