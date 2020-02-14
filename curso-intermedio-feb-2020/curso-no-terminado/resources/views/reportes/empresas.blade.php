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
		<p>Reporte de Empresas</p>		
	</div>
	<div id="footer">
		<p>Este es un footer</p>
	</div>
	<div class="container">
		<img src="./images/industry.png" height="200px" width="200px">			
		<table id="customers">
			<tr>
				<th>NOMBRE</th>	
				<th>ESTADO</th>	
				<th>ENT. TRANSFERENTE</th>	
				<th>VIGENCIA</th>
				<th>ULTIMO PROCESO</th>	
			</tr>

			@foreach ($empresas as $emp)
				<tr>
					<td>{{ $emp->nombre }}</td>
					<td>{{ $emp->estado }}</td>
					<td>{{ $emp->entidadtransferente }}</td>
					<td>{{ $emp->vigencia }}</td>
					<td>{{ $emp->ultimoproceso }}</td>
				</tr>
			@endforeach
		</table>
	</div>
</body>
</html>