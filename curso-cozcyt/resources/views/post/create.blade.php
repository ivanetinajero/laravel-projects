@extends('layouts.principal')

@section('contenido')
  Crear post
         
  @include('partial.mensaje')       
         
  {!! Form::open(['route' => 'articulos.store']) !!}
      
    @include('partial.formulario')        
    
    {!! Form::submit('Registrar',['class'=>'btn btn-default']) !!}   
    
  {!! Form::close() !!}

@endsection
