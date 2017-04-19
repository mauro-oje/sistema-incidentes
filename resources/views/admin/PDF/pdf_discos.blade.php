<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detalle Discos</title>
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
		<h3 class="centro">Listado de Discos duros</h3>
	</div>
	<hr>
	<h2 class="centro"></h2>
	<table>
		<thead>
			<tr>
				<th>Marca</th>
				<th>Modelo</th>
				<th>Capacidad/Unidad</th>
				<th>Interface</th>
				<th>¿Disponible?</th>
			</tr>
		</thead>
		<tbody>
			@foreach($discos as $disco)
				<tr>
					<td>{{$disco->tipo_disco}}</td>
					<td>{{$disco->marca_disco}}</td>
					<td>{{$disco->modelo_disco}}</td>
					<td>{{$disco->capacidad_disco}}</td>
					<td>{{$disco->interface}}</td>
					@if($disco->disponible == "si")
						<td>{{$disco->disponible}}</td>
					@else
						<td>{{$disco->disponible}}</td>
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