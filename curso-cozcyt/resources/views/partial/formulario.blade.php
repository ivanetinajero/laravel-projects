 {!! Form::text('titulo', null,['class'=>'form-control']) !!}  
 {!! Form::text('contenido', null,['class'=>'form-control','placeholder'=>'mi contenido']) !!}  
 {!! Form::select('activo', [true => 'Activo', false => 'Inactivo'],
 null,['class'=>'form-control']) !!} 