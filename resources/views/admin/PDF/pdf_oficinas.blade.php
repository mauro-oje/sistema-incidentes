<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detalle oficina</title>
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
		<h3 class="centro" >Listado de Oficinas</h3>
	</div>
	<hr>
	<h2 class="centro"></h2>
	<table>
		<thead>
			<tr>
				<th>Oficinas</th>
				<th>Áreas</th>
			</tr>
		</thead>
		<tbody>
			@foreach($oficinas as $oficina)
				<tr>
					<td>{{$oficina->oficina}}</td>
					<td>{{$oficina->area->nombre_area}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="centro" id="footer">
		<p>Sistema gestion de incidentes</p>
	</div>
</body>

</html>