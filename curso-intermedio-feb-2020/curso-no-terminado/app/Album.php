<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'album'; // Nombre de la tabla
    // Los campos que se deben de completar
    protected $fillable = [
        'ruta',
		'descripcion'
	];  
}
