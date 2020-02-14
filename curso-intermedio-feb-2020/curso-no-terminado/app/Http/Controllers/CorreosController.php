<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\EnviarMensaje;
use Mail;
//use Auth;

class CorreosController extends Controller
{
    protected function enviar(){

    	$destino = "ivanetinajero@gmail.com";
    	$asunto="Mensaje desde Laravel 6";
    	Mail::to($destino)->send(new EnviarMensaje($asunto));
    }
}
