<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Http\Requests\AlbumRequest;

class AlbumController extends Controller
{
    public function index()
    {     
    	$archivos = Album::get();
    	//dd($archivos);
        return view('album.index',compact('archivos'));
    }

    public function store(AlbumRequest $request)
    {     
        $archivo = new Album($request->all()); // Autocompletamos los atributos del modelo con datos del request
        // La variable $path tendra la ruta donde se guardara el archivo (public/archivos/?) 
    	$path = $request->file('archivo')->store('public/album');
    	$archivo->ruta = $path;
    	$archivo->save();
    	return back()->with('mensaje', 'La foto se subió con éxito');
    }
}
