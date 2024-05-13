<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sni extends Model
{
    use HasFactory;
    protected $table = 'sni';
    protected $fillable = [
        'nombre'
    ];

    public function profesores(){
        return $this->hasMany(Profesor::class);
    }
}
