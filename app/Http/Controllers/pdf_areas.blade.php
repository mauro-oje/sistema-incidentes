<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de Areas</title>
	<link rel="stylesheet" type="text/css" href="plugins/bootstrap/css/css.css">
</head>
<body>
	<h2 class="centro">Listado de Áreas</h2>
	<table>
		<thead>
			<tr>
				<th>Áreas</th>
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
</body>
</html>