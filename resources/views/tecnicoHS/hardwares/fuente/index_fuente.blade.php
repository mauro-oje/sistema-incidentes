@extends('admin.plantilla.principal')
@section('titulo','Listado de fuentes')
@section('contenido')
	<h2 class="text-center"><i class="fa fa-list-alt" aria-hidden="true"></i> Listado de Fuentes</h2>
	<hr>
	<a href="{{route('fuente.generar-pdf-hs')}}" class="btn btn-danger"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Listado de Fuentes</a>
	<hr>
	<!--Incluyo el paquete Flash para mostrar los mensajes de errores-->
	@include('flash::message')
	<table class="table listado table-striped">
		<thead>
			<th>Marca</th>
			<th>Modelo</th>
			<th>Capacidad</th>
			<th>¿Disponible?</th>
		</thead>
		<tbody>
			@foreach($fuentes as $fuente)
				<tr>
					<td>{{$fuente->marca_fuente}}</td>
					<td>{{$fuente->modelo_fuente}}</td>
					<td>{{$fuente->capacidad_fuente}}</td>
					@if($fuente->disponible == "si")
						<td><span class="label label-success">{{$fuente->disponible}}</span></td>
					@else
						<td><span class="label label-default">{{$fuente->disponible}}</span></td>
					@endif
				</tr>
			@endforeach
		</tbody>
	</table>
@endsection
@section('js')
	<script type="text/javascript">
        $('.listado').DataTable({
			language: {
				url: '/Laravel/SistemaIncidentes/public/plugins/bootstrap/js/dataTables.spanish.json'
				//url: '/sistema-incidentes/public/plugins/bootstrap/js/dataTables.spanish.json'
			}
        });
	</script>
@endsection
