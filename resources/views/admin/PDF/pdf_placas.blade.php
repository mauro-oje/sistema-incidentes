<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detalle Placas madres</title>
		<link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/css.css') }}">

		<style>
			 html,body {
            	height:100%;
        	}
		</style>

	</head>
	<body>
	<hr>
	<div id="header-top">
		<h3 class="centro">Listado de Placas madres</h3>
	</div>
	<hr>
	<h2 class="centro"></h2>
	<table>
		<thead>
			<tr>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Version</th>
				<th>Discponible</th>
			</tr>
		</thead>
		<tbody>
			@foreach($placas_madres as $placa)
				<tr>
					<td>{{$placa->marca_placa}}</td>
					@if($placa->modelo_placa)
						<td>{{$placa->modelo_placa}}</td>
					@else
						<td>{{"Sin modelo"}}</td>
					@endif
					@if($placa->version)
						<td>{{$placa->version}}</td>
					@else
						<td>{{'Sin version'}}</td>
					@endif
					@if($placa->disponible == "si")
						<td>{{$placa->disponible}}</td>
					@else
						<td>{{$placa->disponible}}</td>
					@endif
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="centro" id="footer">
		<p>Sistema gestion de incidentes</p>
	</div>
</body>

</html>