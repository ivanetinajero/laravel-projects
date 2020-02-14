@extends('layouts.app')
@section('content')
	<div class="container">
		<h1>Grafica</h1>
		<canvas id="myChart" width="400" height="400"></canvas>
		{{$etapas}}	
	</div>	
@endsection

@section('scripts')
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
	<script type="text/javascript">
		
		var ctx = document.getElementById('myChart');

		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: ['Mujeres', 'Hombres'],
		        		        
		        datasets: [{
		            label: 'Empresas (Etapa Actual)',
		            data: [1, 3],
		            backgroundColor: [
		                'rgba(255, 99, 132, 0.2)',
		                'rgba(54, 162, 235, 0.2)'
		            ],
		            borderColor: [
		                'rgba(255, 99, 132, 1)',
		                'rgba(54, 162, 235, 1)',
		                'rgba(255, 206, 86, 1)'
		            ],
		            borderWidth: 1
		        }]
		    },
		    options: {
		        scales: {
		            yAxes: [{
		                ticks: {
		                    beginAtZero: true
		                }
		            }]
		        }
		    }
		});		

	</script>

@endsection