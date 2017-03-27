<!-- Stored in resources/views/home/index.blade.php -->
@extends('layouts.app')

@section('title', 'Something | Fun')

@section('sidebar')
   <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
   @include('partial.errores')
   <p>This is my body content.</p>
   
   @if($edad > 17)
      <h1>Soy mayor</h1>
   @else   
      <h1>Soy menor</h1>
   @endif
      
   @for ($i = 0; $i < 10; $i++)
      The current value is {{ $i }}
   @endfor
   <ul>
     
      @foreach ($users as $u)
      <li>This is user {{ $u }}</li>
      @endforeach
   
   </ul>
@endsection

@section('footer')
<h2>Copyright</h2>
@endsection