<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Empresa;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmpresasExport implements FromCollection, WithHeadings
{

	public function headings(): array
    {
        return [
        	'id',
            'nombre',
            'nombrecorto',
            'estado',
            'entidadtransferente',
            'estadoactual',
            'vigencia',
            'ultimoproceso',
            'etapaactual',
            'creada',
            'actualizado'
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
    	$empresas = Empresa::all();
    	return $empresas;
    }
}
