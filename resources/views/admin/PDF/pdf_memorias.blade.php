<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detalle Memorias</title>
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
		<h3 class="centro">Listado de Memorias Ram</h3>
	</div>
	<hr>
	<h2 class="centro"></h2>
	<table>
		<thead>
			<tr>
				<th>Tipo</th>
				<th>Marca</th>
				<th>Capacidad/Unidad</th>
				<th>Frecuencia</th>
				<th>¿Disponible?</th>
			</tr>
		</thead>
		<tbody>
			@foreach($memorias as $memoria)
				<tr>
					<td>{{$memoria->tipo_memoria}}</td>
					<td>{{$memoria->marca_memoria}}</td>
					<td>{{$memoria->capacidad_memoria}}</td>
					<td>{{$memoria->frecuencia}}</td>
					@if($memoria->disponible == "si")
						<td>{{$memoria->disponible}}</td>
					@else
						<td>{{$memoria->disponible}}</td>
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