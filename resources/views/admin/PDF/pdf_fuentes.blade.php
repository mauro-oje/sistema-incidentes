<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detalle Fuentes</title>
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
		<h3 class="centro">Listado de Fuentes</h3>
	</div>
	<hr>
	<h2 class="centro"></h2>
	<table>
		<thead>
			<tr>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Capacidad</th>
				<th>¿Disponible?</th>
			</tr>
		</thead>
		<tbody>
			@foreach($fuentes as $fuente)
				<tr>
					<td>{{$fuente->marca_fuente}}</td>
					<td>{{$fuente->modelo_fuente}}</td>
					<td>{{$fuente->capacidad_fuente}}</td>
					@if($fuente->disponible == "si")
						<td>{{$fuente->disponible}}</td>
					@else
						<td>{{$fuente->disponible}}</td>
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