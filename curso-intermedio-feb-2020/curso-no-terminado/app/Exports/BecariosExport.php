<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Becario;
use Maatwebsite\Excel\Concerns\WithHeadings;

class BecariosExport implements FromCollection, WithHeadings
{

	public function headings(): array
    {
        return [
        	'id',
            'apellido_paterno',
	        'apellido_materno',
	        'nombre',
	        'area_del_conocimiento',
	        'nivel',
	        'institucion',
	        'entidad_destino',
	        'sexo',
	        'creada',
	        'actualizado'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	// Recuperamos 50 registros aleatorios de la BD
    	//$becarios = Becario::inRandomOrder()->get()->take(50);
    	$becarios = Becario::all();
    	return $becarios;
    }
}
