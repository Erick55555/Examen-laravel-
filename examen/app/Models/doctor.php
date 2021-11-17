<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class doctor extends Model
{
    protected $fillable = [
        'id',
        'nombre',
        'apellidos',
        'num_pacientes',
    ];
}
