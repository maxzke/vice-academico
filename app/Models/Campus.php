<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;
    protected $table = 'campus';
    protected $fillable = [
        'nombre'
    ];

    public function profesores(){
        return $this->hasMany(Profesor::class);
    }
}
