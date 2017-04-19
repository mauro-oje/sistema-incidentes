<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detalle Áreas</title>
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
		<h3 class="centro" >Listado de Áreas</h3>
	</div>
	<hr>
	<h2 class="centro"></h2>
	<table>
		<thead>
			<tr>
				<th></th>
			</tr>
		</thead>
		<tbody>
			@foreach($areas as $area)
				<tr>
					<td>{{$area->nombre_area}}</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<div class="centro" id="footer">
		<p>Sistema gestion de incidentes</p>
	</div>
</body>

</html>