<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    protected $table = 'empresas'; // Nombre de la tabla
    // Los campos que se deben de completar
    protected $fillable = [
        'nombre',
		'nombrecorto',
		'estado',
		'entidadtransferente',
		'estadoactual',
		'vigencia',
		'ultimoproceso',
		'etapaactual'
	];  
}
