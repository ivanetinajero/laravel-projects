<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EmpresasRequest;
use Excel;
use App\Imports\EmpresasImport;
use App\Exports\EmpresasExport;
use PDF;
use App\Empresa;
use DB;

class EmpresasController extends Controller
{
    public function importar(EmpresasRequest $request)
    {
    	Excel::import(new EmpresasImport, $request->documento);
    	return back()->with('mensaje', 'Documento subido.'); 	
    }

    public function exportar()
    {
    	return Excel::download(new EmpresasExport, 'empresas.xlsx');
    }

    public function pdf()
    {    	
    	$empresas = Empresa::all();
		$pdf = PDF::loadview('reportes.empresas', compact('empresas'));
		return $pdf->stream('empresas.pdf');	
    }

    public function grafica()
    {     

        $etapas =DB::table('empresas')->select('etapaactual')->distinct()->get();

        //dd($etapas);

        /*
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
        */
        return view('graficas.empresas', compact('etapas'));
    }
}
