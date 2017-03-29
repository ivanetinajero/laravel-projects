@extends('layouts.principal')

@section('contenido')
         crear post
         
  {!! Form::open(['route' => 'articulos.store']) !!}
      
    {!! Form::text('titulo', null,['class'=>'form-control']) !!}  
    {!! Form::text('contenido', null,['class'=>'form-control','placeholder'=>'mi contenido']) !!}  
    {!! Form::select('activo', [true => 'Activo', false => 'Inactivo'],
    null,['class'=>'form-control']) !!} 
    {!! Form::submit('Registrar',['class'=>'btn btn-default btn-lg']) !!}   
    
  {!! Form::close() !!}

@endsection
