<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Becario extends Model
{
    protected $table = 'becarios'; // Nombre de la tabla
    // Los campos que se deben de completar
    protected $fillable = [
        'apellido_paterno',
        'apellido_materno',
        'nombre',
        'area_del_conocimiento',
        'nivel',
        'institucion',
        'entidad_destino',
        'sexo'
	];    
}
