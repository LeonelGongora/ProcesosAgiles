<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'celular',
        'genero',
        'fecha_contratacion'
    ];
}
