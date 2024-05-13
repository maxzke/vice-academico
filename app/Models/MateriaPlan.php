<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MateriaPlan extends Model
{
    use HasFactory;
    protected $table = 'materia_plan';
    protected $fillable = [
        'materia_id',
        'plan_id'
    ];
}
