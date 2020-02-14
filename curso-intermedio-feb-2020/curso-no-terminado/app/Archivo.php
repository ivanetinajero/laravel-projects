<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = 'archivos'; // Nombre de la tabla
    // Los campos que se deben de completar
    protected $fillable = [
        'ruta',
		'descripcion'
	];  
}
