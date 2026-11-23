<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Equipo extends Model
{
    
    use HasFactory;


    protected $table = 'equipo'; // Nombre de la tabla en la base de datos
    protected $fillable = [
        'codigo',
        'nombre',
        'marca',
        'fecha_adquisicion',
        'estado',
    ];
}
