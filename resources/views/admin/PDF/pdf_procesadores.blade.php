<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detalle Procesadores</title>
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
		<h3 class="centro">Listado de Microprocesadores</h3>
	</div>
	<hr>
	<h2 class="centro"></h2>
	<table>
		<thead>
			<tr>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Capacidad</th>
				<th>Nucelos</th>
				<th>Socket</th>
				<th>¿Disponible?</th>
			</tr>
		</thead>
		<tbody>
			@foreach($procesadores as $procesador)
				<tr>
					<td>{{$procesador->marca_procesador}}</td>
					<td>{{$procesador->modelo_procesador}}</td>
					<td>{{$procesador->capacidad_procesador}}</td>
					<td>{{$procesador->core_procesador}}</td>
					<td>{{$procesador->socket_procesador}}</td>
					@if($procesador->disponible == "si")
						<td>{{$procesador->disponible}}</td>
					@else
						<td>{{$procesador->disponible}}</td>
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