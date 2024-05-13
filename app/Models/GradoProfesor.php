<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GradoProfesor extends Model
{
    use HasFactory;
    protected $table = 'grado_profesor';
    protected $fillable = [
        'profesor_id',
        'grado_id',
        'fecha',
    ];
}
