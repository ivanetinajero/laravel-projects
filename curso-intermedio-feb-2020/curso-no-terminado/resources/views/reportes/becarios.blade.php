<!DOCTYPE html>
<html>
<head>
	<title>Reporte</title>
	<style type="text/css">
		
		#customers {
		  font-size: 7;
		  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		#customers td, #customers th {
		  border: 1px solid #ddd;
		  padding: 8px;
		}

		#customers tr:nth-child(even){
			background-color: #D8D8D8;
		}
		
		#customers th {
		  font-size: 8;
		  padding-top: 12px;
		  padding-bottom: 12px;
		  text-align: left;
		  background-color: #4CAF50;
		  color: white;
		}

		#header{
			position: fixed;
			top: -40px;
		}
		#footer{
			position: fixed;
			bottom: -5px;
		}

	</style>
</head>
<body>
	<div id="header">
		<p>Reporte de Becarios</p>
	</div>
	<div id="footer">
		<p>Este es un footer</p>
	</div>
	<div class="container">			
		<table id="customers">
			<tr>
				<th>NOMBRE</th>	
				<th>AP PATERNO</th>	
				<th>AP MATERNO</th>	
				<th>AREA CONOCIMIENTO</th>
				<th>NIVEL</th>
				<th>INSTITUCION</th>	
				<th>ENTIDAD DESTINO</th>
				<th>SEXO</th>
			</tr>

			@foreach ($becarios as $becario)
				<tr>
					<td>{{ $becario->nombre }}</td>
					<td>{{ $becario->apellido_paterno }}</td>
					<td>{{ $becario->apellido_materno }}</td>
					<td>{{ $becario->area_del_conocimiento }}</td>
					<td>{{ $becario->nivel }}</td>
					<td>{{ $becario->institucion }}</td>
					<td>{{ $becario->entidad_destino }}</td>
					<td>{{ $becario->sexo }}</td>
				</tr>
			@endforeach
		</table>
	</div>
</body>
</html>