<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detalle Impresoras</title>
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
		<h3 class="centro">Listado de Impresoras</h3>
	</div>
	<hr>
	<h2 class="centro"></h2>
	<table>
		<thead>
			<tr>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Tipo</th>
			<th>Dirección IP</th>
			<th>¿Disponible?</th>
			</tr>
		</thead>
		<tbody>
			@foreach($impresoras as $impresora)
				<tr>
					<td>{{$impresora->marca_impresora}}</td>
					@if($impresora->modelo_impresora)
						<td>{{$impresora->modelo_impresora}}</td>
					@else
						<td>{{'Sin modelo'}}</td>
					@endif
					@if($impresora->tipo_impresora)
						<td>{{$impresora->tipo_impresora}}</td>
					@else
						<td>{{'Sin tipo'}}</td>
					@endif
					@if($impresora->ip)
						<td>{{$impresora->ip->direccion}}</td>
					@else
						<td>{{"Sin direccion IP"}}</td>
					@endif
					@if($impresora->disponible == "si")
						<td>{{$impresora->disponible}}</td>
					@else
						<td>{{$impresora->disponible}}</td>
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