<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ImportarBecariosRequest;
use Excel;
use App\Imports\BecariosImport;
use App\Exports\BecariosExport;
use App\Becario;
use PDF;
use DB;

class BecariosController extends Controller
{
    public function importar(ImportarBecariosRequest $request)
    {
    	Excel::import(new BecariosImport, $request->documento);
    	return back()->with('mensaje', 'Documento subido.'); 	
    }

    public function exportar()
    {
    	return Excel::download(new BecariosExport, 'becarios.xlsx');
    }

    public function pdf()
    {    	
    	$becarios = Becario::inRandomOrder()->get()->take(50);
    	//$becarios = Becario::all();
		$pdf = PDF::loadview('reportes.becarios', compact('becarios'));
		return $pdf->stream('reporte.pdf');		
    }

    public function grafica()
    {     
        // Consulta Forma 1
        $becarios = Becario::select( 
            DB::raw('SUM(IF(becarios.sexo = "MASCULINO", 1, 0)) masculino'),
            DB::raw('SUM(IF(becarios.sexo = "FEMENINO", 1, 0)) femenino')
        )
        ->first();

        // Consulta Forma 2
        $masculino = Becario::where('sexo', 'MASCULINO')->count();
        $femenino = Becario::where('sexo', 'FEMENINO')->count();        
        
        //dd($becarios, $masculino, $femenino);
        
        return view('graficas.grafica', compact('masculino', 'femenino'));
    }
}
