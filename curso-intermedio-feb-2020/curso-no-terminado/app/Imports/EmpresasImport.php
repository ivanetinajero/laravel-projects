<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use App\Empresa;

class EmpresasImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {

    	foreach ($collection as $row) {
    		//dd($row->toArray());
    		$empresa = new Empresa($row->toArray());
    		$empresa->save();
    	}   
    	return back()->with('message-success', 'Empresas guardadas correctamente.');
    	
    }
}
