<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archivo;

class ArchivosController extends Controller
{
    public function index()
    {     
    	$archivos = Archivo::get();
    	//dd($archivos);
        return view('archivos.index',compact('archivos'));
    }

    public function store(Request $request)
    {     
        $archivo = new Archivo($request->all()); // Autocompletamos los atributos del modelo con datos del request
        // La variable $path tendra la ruta donde se guardara el archivo (public/archivos/?) 
    	$path = $request->file('archivo')->store('public/archivos');
    	$archivo->ruta = $path;
    	$archivo->save();
    	return back()->with('mensaje', 'El archivo se subió con éxito');
    }
}
