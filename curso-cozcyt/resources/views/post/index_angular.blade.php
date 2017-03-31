@extends('layouts.principal')

@section('contenido')
         
<div ng-app="myApp" ng-controller="myCtrl">
  <h2>Listado de Posts con Angular</h2>

  <form ng-submit="registrar()">
    <label for="titulo">Titulo</label>
    <input type="" ng-model="nuevo.titulo" placeholder="titulo"><br>
    <label for="contenido">Contenido</label>
    <input type="" ng-model="nuevo.contenido" placeholder="contenido"><br>
    <label for="activo">Activo</label>
    <select ng-model="nuevo.activo" >
      <option value=true>Activo</option>
      <option value=false>Inactivo</option>
    </select><br>
    <button type="submit">Registrar</button>
  </form>
  
  <ul>
    <li ng-repeat="p in posts">
      <a href="#" onaftersave="actualizar(p)" editable-text="p.titulo" >
        @{{ p.titulo || "empty" }}
      </a> |
      <a href="#" onaftersave="actualizar(p)" editable-text="p.contenido" >
         @{{ p.contenido || "empty" }}
      </a> |

       @{{p.activo}} |
       <a href="#" ng-click="eliminar(p)" >Eliminar</a>
    </li>
  </ul>
  
</div>

@endsection

<?php
/**
 * Solo son Apuntes de Angular
	<input type="text" ng-model="edad">
	<p>
	@{{edad}}
	</p>
	<h1 ng-if="edad==18">
		Bienvenido !
	</h1>
	<h2 ng-show="edad < 18">
		No tieenes acceso
	</h2>
	<h3>
	@{{saludo}}
   </h3>
   <br>
   <input type="text" ng-model ="nuevo.nombre" placeholder="nombre"><br>
   <input type="text" ng-model ="nuevo.apellido" placeholder="apellido"><br>
   <button type="button" ng-click="alerta()">Clic</button><br>
   @{{nuevo | json}}
 */
?>